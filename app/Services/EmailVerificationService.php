<?php

namespace App\Services;

use App\Models\EmailVerificationToken;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Notification;
use App\Notifications\EmailVerificationNotification;
use App\Models\User;

class EmailVerificationService 
{
    /**
     * Send verification link
     */
    public function sendVerificationLink($user)
    {
        $verificationLink = $this->generateVerificationLink($user->email);
        Notification::send($user, new EmailVerificationNotification($this->generateVerificationLink($user->email)));
        return $verificationLink;
    }
    
    /**
     * Check if already verified
     */

    public function checkIfEmailIsVerified($user)
    {
        if($user->email_verified_at){
            return response()->json([
                'status' => 'failed',
                'message' => 'Email sudah diverifikasi',
            ]);
        }
    }

    /**
     * Resend link
     */

    public function resendLink($email){
        $user = User::where('email', $email)->first();
        if ($user){
            $this->sendVerificationLink($user);
            return response()->json([
                'status' => 'success',
                'message' => 'Verifikasi berhasil dikirim ulang',
            ]);
        } else {
            return response()->json([
                'status' => 'failed',
                'message' => 'User tidak ditemukan',
            ]);
        }
    }

    /**
     * Verify email
     */

    public function verifyEmail($email, $token){
        $user = User::where('email', $email)->first();
        if (!$user){
            return response()->json([
                'status' => 'failed',
                'message' => 'User tidak ditemukan',
            ]);
        }
        $this->checkIfEmailIsVerified($user);
        $verifiedToken = $this->verifyToken($email, $token);
        if($user->markEmailAsVerified()){
            return response()->json([
                'status' => 'success',
                'message' => 'Email berhasil diverifikasi',
            ]);
        } else {
            return response()->json([
                'status' => 'failed',
                'message' => 'Email gagal diverifikasi, coba lagi',
            ]);
        }
    }

    /**
     * Verify token
     */

     public function verifyToken($email, $token){
        $token = EmailVerificationToken::where('email', $email)->where('token', $token)->first();
        if (!$token){
            if($token->expired_at >= now()){
                return $token;
            } else {
                $token->delete();
                return response()->json([
                    'status' => 'failed',
                    'message' => 'Token expired',
                ]);
            }
        } else {
            return response()->json([
                'status' => 'failed',
                'message' => 'Invalid token',
            ]);
        }
    }    

    /**
     * Generate verification link
     */

     public function generateVerificationLink($email)
    {
        $checkIfTokenExists = EmailVerificationToken::where('email', $email)->first();
        if ($checkIfTokenExists) {
            $checkIfTokenExists->delete();
        }
        $token = Str::uuid();
        $url = config('app.url') . "?token=" . $token . "&email=" . $email;
        $saveToken = EmailVerificationToken::create([
            'email' => $email,
            'token' => $token,
            'expired_at' => now()->addMinutes(60),
        ]);

        if ($saveToken) {
            return $url;
        }
    }
}