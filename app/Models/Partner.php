<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Partner extends Model
{
    use HasFactory;
    protected $guarded = [];

    protected $fillable = [
        'id_user',
        'nama_partner',
        'nama_perusahaan_partner',
        'provinsi_partner',
        'kabupaten_partner',
        'kecamatan_partner',
        'kelurahan_partner',
        'alamat_partner',
        'foto_profil',
        'foto_peternakan',
        'lama_peternakan_berdiri',
        'latitude',
        'longitude',
        'status',
        'tanggal_lahir',
        'jenis_kelamin',
        'nomor_rekening',
        'nama_bank',
        'nama_pemilik_rekening',
        'change_at',
        'diubah',
    ];

    public function users(){
        return $this->belongsTo(User::class, 'id_user', 'id');
    }
}
