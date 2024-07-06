<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use App\Models\User;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Events\Verified;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class PartnerAdminController extends Controller
{
    public function list(){
        $partner = Partner::with('users')->get();

        return view('admin.pages.partner.index', compact('partner'));
    }

    public function show($id){
        $partner = Partner::with('users')->find($id);

        return view('admin.pages.partner.show', compact('partner'));
    }

    public function submission(){
        $partner = Partner::with('users')->where('status', 'Belum terverifikasi')->get();

        return view('admin.pages.partner.submission', compact('partner'));
    }

    public function verified(){
        $partner = Partner::with('users')
                  ->where('status', 'Sudah diverifikasi')
                  ->orWhere('status', 'Dinonaktifkan')
                  ->get();

        return view('admin.pages.partner.verified', compact('partner'));
    }


    public function nonactive(Request $request, $id){
        try {
            $partner = Partner::findOrFail($id);

            if ($partner) {
                $partner->update([
                    'status' => 'Dinonaktifkan',
                ]);

                return redirect()->route('admin.partner.from.verified')->with('success', 'Partner telah dinonaktifkan, silahkan menghubungi partner');
            } else {
                return redirect()->route('admin.partner.from.verified')->with('error', 'Akun gagal dinonaktifkan');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: '.$e->getMessage());
        }
    }

    public function verify(Request $request, $id) {
        $partner = Partner::findOrFail($id);

        if ($partner) {
            $partner->update([
                'status' => 'Sudah diverifikasi',
            ]);

            return redirect()->route('admin.partner')->with('success', 'Akun berhasil diverifikasi');
        } else {
            return redirect()->route('admin.partner')->with('error', 'Akun gagal diverifikasi');
        }
    }
    public function active(Request $request, $id) {
        $partner = Partner::findOrFail($id);

        if ($partner) {
            $partner->update([
                'status' => 'Sudah diverifikasi',
            ]);

            return redirect()->route('admin.partner.from.verified')->with('success', 'Partner telah diaktifkan, silahkan menghubungi partner');
        } else {
            return redirect()->route('admin.partner.from.verified')->with('error', 'Akun gagal diaktifkan');
        }
    }
}
