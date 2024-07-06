<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class PartnerAuthController extends Controller
{
    public function __construct(){
        // Ignored, really
        // $this->middleware('auth')->only(['list']);
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function login(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email',
            'password' => 'required',
        ]);

        $credentials = $request->only(['email', 'password']);

        if (auth()->attempt($credentials)) {
            $user = auth()->user();
            $partner = $user->partner;
            if($user->id_user_role == 3 && $partner->status == 'Sudah diverifikasi'){
                $token = Auth::guard('api')->attempt($credentials);
                return $this->respondWithToken($token);
            } else {
                return response()->json([
                    'message' => 'Akun anda belum terverifikasi'
                ]);
            }
        }
    
        return response()->json([
            'message' => 'Anda bukan partner'
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

    public function register(Request $request){
        $validator = Validator::make($request->all(), [
            'nama' => 'required',
            'username' => 'required',
            'email' => 'required',
            'password' => 'required',
            'konfirmasi_password' => 'required',
            'id_user_role' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                $validator->errors(), 422
            ]);
        }

        $input = $request->all();
        $input['password'] = bcrypt($request->password);

        $user = User::create($input);

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $user
        ]);
    }

    public function logout()
    {
        auth()->logout();

        return response()->json(['message' => 'Successfully logged out']);
    }
}
