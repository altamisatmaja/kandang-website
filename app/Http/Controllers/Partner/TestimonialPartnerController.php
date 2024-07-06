<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\Testimonial;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TestimonialPartnerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    /**
     * Read data ulasan
     */

    public function list(){
        $user = Auth::user();

        $partner = Partner::where('id_user', $user->id)->first();
        $testimonials = Testimonial::with(['user', 'product'])->paginate(5);

        return view('partner.pages.testimonial.index', compact('testimonials', 'partner'));
    }

    /**
     * Show detail ulasan
     */
    public function show($slug_testimonial){
        $partner = Auth::user();
        $testimonials = Testimonial::where('slug_testimonial', $slug_testimonial)->first();
        $testimoni = $testimonials->with(['user', 'product'])->get();
        // dd($testimoni);

        return view('partner.pages.testimonial.show', compact('partner', 'testimonials', 'testimoni'));
    }
}
