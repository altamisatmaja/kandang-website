<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class CategoryProduct extends Model
{
    use HasFactory;
    protected $guarded = [];
    protected $fillable = [
        'nama_kategori_product',
        'deskripsi_kategori_product',
        'gambar_kategori_product',
        'slug_kategori_product',
    ];

    public function categorylivestock() {
        return $this->hasMany(CategoryLivestock::class, 'id_kategori_produk');
    }

    public function products() {
        return $this->belongsTo(Product::class, 'id_kategori');
    }
    
}
