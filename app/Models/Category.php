<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categorylivestock() {
        return $this->hasMany(CategoryLivestock::class);
    }

    public function categoryproduct() {
        return $this->hasMany(CategoryProduct::class);
    }
}
