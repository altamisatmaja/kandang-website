<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryLivestock extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'category_livestocks';

    protected $fillable = [
        'nama_kategori_hewan',
        'deskripsi_kategori_hewan',
        'slug',
        'gambar_kategori_hewan',
    ];

    public function typelivestock() : HasMany {
        return $this->hasMany(TypeLivestock::class);
    }

    public function categoryproduct() {
        return $this->belongsTo(CategoryProduct::class, 'id_kategori_produk');
    }

    public function farm(){
        return $this->hasMany(Farm::class);
    }

}
