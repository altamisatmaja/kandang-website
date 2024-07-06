<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class LocationController extends Controller
{
    public function provinsi(){
        $provinsi = Http::get('https://ibnux.github.io/data-indonesia/provinsi.json')->json();
    }

    public function kabupaten(Request $request){

    }
}
