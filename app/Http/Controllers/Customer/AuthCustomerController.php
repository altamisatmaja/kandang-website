<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use App\Http\Requests\Auth\LoginRequest;
use App\Models\User;
use App\Services\EmailVerificationService;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;

class AuthCustomerController extends Controller
{
    private $service;

    public function __construct(EmailVerificationService $service)
    {
        $this->service = $service;
    }

    public function index()
    {
        return view('customer.auth.login');
    }

    public function register_view()
    {
        return view('customer.auth.register');
    }

    /**
     * Handle an incoming authentication request.
     *
     * @param  \App\Http\Requests\Auth\LoginRequest  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function login(LoginRequest $request)
    {
        $credentials = $request->only('email', 'password');

        $validator = Validator::make($request->all(), [
            'email' => 'required|email',
            'password' => 'required|'
        ]);

        if($validator->fails()){
            return redirect()->back()->withErrors($validator);
        }

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if (Auth::user()->user_role == 'Pelanggan') {
                return redirect()->route('customer.dashboard');
            } else {
                Auth::guard('web')->logout();
                return redirect()->route('customer.login')->with('status', 'Anda bukan pelanggan!');
            }
        }

        return redirect()->back()->with('status', 'Email atau password salah!');
    }

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }

    public function register(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required',
            'konfirmasi_password' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json([
                $validator->errors(), 422
            ]);
        }

        $input = $request->all();
        $input['password'] = bcrypt($request->password);

        $user = User::create($input);

        if ($user) {
            $this->service->sendVerificationLink($user);
            return response()->json([
                'data' => $user
            ]);
        }
    }

    public function logout()
    {
        Session::flush();
        return redirect('customer/login');
    }

    /**
     * Handle account registration request
     *
     * @param Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function register_email(Request $request)
    {
        $user = User::create($request->validated());

        event(new Registered($user));

        auth()->login($user);

        return redirect('/')->with('success', 'Account successfully registered.');
    }
}
