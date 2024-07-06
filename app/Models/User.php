<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Tymon\JWTAuth\Contracts\JWTSubject;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements JWTSubject, MustVerifyEmail
{
    use Notifiable;

    // Rest omitted for brevity

    protected $fillable = [
        'nama',
        'username',
        'email',
        'password',
        'user_role',
        'social_id',
        'email_verified_at',
        'social_type',
        'profile_photo_path',
        'provinsi_user',
        'kabupaten_user',
        'kecamatan_user',
        'kelurahan_user',
        'latitude',
        'longitude',
        'alamat_lengkap',
        'no_telp',
    ];

    /**
     * Get the identifier that will be stored in the subject claim of the JWT.
     *
     * @return mixed
     */
    public function getJWTIdentifier()
    {
        return $this->getKey();
    }

    /**
     * Return a key value array, containing any custom claims to be added to the JWT.
     *
     * @return array
     */
    public function getJWTCustomClaims()
    {
        return [];
    }

    public function partner()
    {
        return $this->belongsTo(Partner::class, 'id', 'id');
    }

    public function testimonials(){
        return $this->hasMany(Testimonial::class, 'id_user', 'id');
    }

}
