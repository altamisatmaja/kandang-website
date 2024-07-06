<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Farm extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $dates = ['lahir_hewan'];


    protected $fillable = [
        'id_kondisi_hewan',
        'id_jenis_gender_hewan',
        'id_partner',
        'id_jenis_hewan',
        'lahir_hewan',
        'deskripsi_hewan',
        'berat_badan_hewan',
        'id_kategori_hewan',
        'nama_hewan',
        'kode_hewan',
        'slug_farm',
    ];

    public function type_livestocks(){
        return $this->belongsTo(TypeLivestock::class, 'id_jenis_hewan', 'id');
    }

    public function gender_livestocks(){
        return $this->belongsTo(GenderLivestock::class, 'id_jenis_gender_hewan', 'id');
    }

    public function partner(){
        return $this->belongsTo(Partner::class, 'id_partner', 'id');
    }

    public function condition_livestock(){
        return $this->belongsTo(ConditionLivestock::class, 'id_kondisi_hewan', 'id');
    }


    public function category_livestock(){
        return $this->belongsTo(CategoryLivestock::class, 'id_kategori_hewan', 'id');
    }

}
