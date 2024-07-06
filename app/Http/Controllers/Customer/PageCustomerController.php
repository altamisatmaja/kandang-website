<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PageCustomerController extends Controller
{
    public function verification($token, $email){
        return view('partner.auth.verification');
    }
}
