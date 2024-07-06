<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Cart extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $table = 'cart';

    protected $fillable = [
        'id_user',
        'id_product'
    ];

    public function user() : hasMany {
        return $this->hasMany(User::class, 'id', 'id_user');
    }

    public function product() : hasMany {
        return $this->hasMany(Product::class, 'id', 'id_product');
    }
}
