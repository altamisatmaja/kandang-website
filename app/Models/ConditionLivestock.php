<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ConditionLivestock extends Model
{
    use HasFactory;
    

    public function farm(){
        return $this->hasMany(Farm::class);
    }
}
