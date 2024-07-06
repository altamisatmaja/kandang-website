<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Validator;
use App\Services\EmailVerificationService;
use App\Http\Requests\VerifyEmailRequest;
use App\Http\Requests\ResendEmailVerificationLinkRequest;

class CustomerController extends Controller
{
    private $service;
    public function __construct(EmailVerificationService $service){
        $this->service = $service;
    }
 
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only(['email', 'password']);

        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            if($user->id_user_role == 2){
                $token = Auth::guard('api')->attempt($credentials);
                return $this->respondWithToken($token);
            }
        }
    
        return response()->json([
            'message' => 'Anda bukan customer'
        ]);
    }
    

    protected function respondWithToken($token)
    {
        return response()->json([
            'access_token' => $token,
            'token_type' => 'bearer',
            'expires_in' => auth('api')->factory()->getTTL() * 60
        ]);
    }

    /**
     * Verify user email
     */

    public function verifyUserEmail(VerifyEmailRequest $request)
    {
        return $this->service->verifyEmail($request->email, $request->token);
    }

    /**
     * Resend verification link
     */

    public function resendEmailVerificationLink(ResendEmailVerificationLinkRequest $request)
    {
        return $this->service->resendLink($request->email);
    }

    /**
     * Registration
     */

    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required|email',
            'password' => 'required|min:8',
            'konfirmasi_password' => 'required|same:password',        
        ]);

        if($validator->fails()){
            return response()->json([
                $validator->errors(), 422
            ]);
        }

        $input = $request->all();
        $input['password'] = bcrypt($request->password);

        $user = User::create($input);

        if($user){
            $verif = $this->service->sendVerificationLink($user);
            return response()->json([
                'success' => true,
                'message' => 'success',
                'data' => $user,
                'token' => $verif,
            ]);
        }
    }

    public function logout()
    {
        // Session::flush();
        // return redirect('admin/login');
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }
}
