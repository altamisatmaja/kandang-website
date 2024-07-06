<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class TypeLivestock extends Model
{
    use HasFactory;

    protected $guarded = [];

    public function categorylivestock() {
        return $this->belongsTo(CategoryLivestock::class, 'id_category_livestocks');
    }
    
    public function farm(){
        return $this->hasMany(Farm::class);
    }
}
