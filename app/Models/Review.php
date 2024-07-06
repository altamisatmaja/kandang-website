<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Review extends Model
{
    use HasFactory;

    protected $guarded = [];

    protected $fillable = [
        'id_product',
        'id_user',
        'review',
        'rating',
    ];

    public function products()
    {
        return $this->belongsTo(Product::class, 'id_product', 'id');
    }


    public function user(){
        return $this->BelongsTo(User::class, 'id_user', 'id');
    }

}
