<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Carbon\Carbon;
use DateTime;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;

class AccountPartnerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();

        return view('partner.pages.profile.account', compact('partner', 'user'));
    }

    /**
     * View account
     */

    public function account_edit_view(){
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();
        return view('partner.pages.profile.edit', compact('partner', 'user'));
    }

    public function information_view(){
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();
        // dd(json_encode($partner));
        return view('partner.pages.profile.information', compact('partner'));
    }

    public function address_view(){
        $partner = Auth::user();
        $partners = Auth::user()->partner;
        return view('partner.pages.profile.address', compact('partner', 'partners'));
    }

    public function password_view(){
        $user = Auth::user();
        $partners = Partner::where('id_user', $user->id)->first();
        $partner = Partner::where('id_user', $user->id)->first();
        return view('partner.pages.profile.password', compact('partner', 'partners'));
    }

    public function rekening_view(){
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();
        $uri = 'https://raw.githubusercontent.com/vnxx/list-of-banks-in-indoneisa-json/master/index.json';

        $response = Http::get($uri);

        $bank = '';
        if ($response->successful()) {
            $bank = $response->json();
        } else {
            return response()->json(['error' => 'Unable to fetch data'], $response->status());
        }

        $changeat = '';

        if ($partner->change_at) {
            $changeat = Carbon::createFromFormat('Y-m-d H:i:s', $partner->updated_at)->format('d M Y');
        }

        return view('partner.pages.profile.rekening', compact('partner', 'bank', 'changeat'));
    }

    public function rekening_store(Request $request){
        try {
            $user = Auth::user();
            $partner = Partner::where('id_user', $user->id)->first();

            $validator = Validator::make($request->all(), [
                'nomor_rekening' => 'required|numeric',
                'nama_bank' => 'required',
                'nama_pemilik_rekening' => 'required',
            ], [
                'nomor_rekening.required' => 'Nomor rekening wajib diisi',
                'nomor_rekening.numeric' => 'Nomor rekening harus berupa angka',
                'nama_bank.required' => 'Nama bank wajib diisi',
                'nama_pemilik_rekening.required' => 'Nama pemilik wajib diisi',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $request['change_at'] = now();
            $request['diubah'] = 'Sudah diubah';

            // dd($request->all());

            $partner->update($request->all());

            return redirect()->back()->with('success', 'Data rekening berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Ubah data akun partner
     */
    public function update_account(Request $request){
        try {
            $request->validate([
                'nama' => 'required|string|no_css_injection',
            ], [
                'nama.required' => 'Nama wajib diisi',
                'nama.string' => 'Nama harus berupa angka dan huruf',
                'nama.no_css_injection' => 'Dilarang keras mengisi script',
            ]);

            $user = Auth::user();

            $user->update($request->all());

            return redirect()->back()->with('success', 'Informasi akun berhasil diupdate');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function password_store(Request $request){
        try {
            $user = Auth::user();
            $partner = Partner::where('id_user', $user->id)->first();

            $validator = Validator::make($request->all(), [
                'password' => 'required|min:6|no_css_injection',
                'konfirmasi_password' => 'required|min:6|same:password|no_css_injection',
            ], [
                'password.no_css_injection' => 'Dilarang keras mengisi script',
                'konfirmasi_password.no_css_injection' => 'Dilarang keras mengisi script',
                'password.required' => 'Password wajib diisi',
                'password.min' => 'Panjang password minimal 6 karakter',
                'konfirmasi_password.min' => 'Panjang konfirmasi password minimal 6 karakter',
                'konfirmasi_password.same' => 'Masukkan Konfirmasi password sesuai dengan password',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $user->update([
                'password' => bcrypt($request->password)
            ]);

            return redirect()->back()->with('success', 'Password berhasil diubah!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Ubah data informasi partner
     */
    public function update_information(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'nama_partner' => 'required|max:16|min:5',
                'nama_perusahaan_partner' => 'required|max:16|min:5',
                'lama_peternakan_berdiri' => 'required',
                'no_hp' => 'required|min:7|max:14'
            ], [
                'nama_partner.required' => 'Nama partner wajib diisi',
                'nama_partner.min' => 'Nama partner minimal 5 karakter',
                'nama_partner.max' => 'Nama partner maksimal 16 karakter',
                'nama_perusahaan_partner.min' => 'Nama perusahaan partner minimal 5 karakter',
                'nama_perusahaan_partner.max' => 'Nama perusahaan partner maksimal 16 karakter',
                'nama_perusahaan_partner.required' => 'Nama perusahaan partner wajib diisi',
                'lama_peternakan_berdiri.required' => 'Lama peternakan berdiri wajib diisi',
                'no_hp.required' => 'Nomor handphone wajib diisi',
                'no_hp.min' => 'Nomor handphone minimal 7 angka',
                'no_hp.max' => 'Nomor handphone maksimal 14 angka',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $user = Auth::user();
            $partner = Partner::where('id_user', $user->id)->first();

            $partner->update($request->all());

            return redirect()->back()->with('success', 'Informasi akun berhasil diupdate');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Ubah data informasi partner
     */
    public function update_address(Request $request){
        try {
            $request->validate([
                'alamat_partner' => 'required',
            ]);

            $user = Auth::user();
            $partner = Partner::where('id_user', $user->id)->first();

            $partner->update($request->all());

            return redirect()->back()->with('success', 'Informasi alamat berhasil diupdate');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
