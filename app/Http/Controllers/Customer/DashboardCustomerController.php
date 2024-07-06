<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DashboardCustomerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();
        
        return view('customer.dashboard', compact('user'));
    }
    
    public function account(){
        $user = Auth::user();
        return view('customer.profile.account', compact('user'));
    }

    public function information(){
        $user = Auth::user();
        return view('customer.profile.information', compact('user'));
    }
    
    public function address(){
        $user = Auth::user();
        return view('customer.profile.address', compact('user'));
    }
}
