<?php

namespace App\Http\Controllers\Customer\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Http;
use Illuminate\Support\Facades\Validator;
use Torann\GeoIP\Facades\GeoIP;

class AccountCustomerController extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
        $user = Auth::user();

        return view('customer.profile.layouts.index', compact('user'));
    }

    public function address(Request $request){
        $user = Auth::user();

        $locationData = $this->getLocations($request);
        $latitude = $locationData['lat'];
        $longitude = $locationData['lot'];

        $provinsiResponse = Http::get('https://ibnux.github.io/data-indonesia/provinsi.json');
        if ($provinsiResponse->successful()) {
            $provinsi = $provinsiResponse->json();
        } else {
            $provinsi = [];
        }
        return view('customer.profile.address', compact('user', 'latitude', 'longitude'));
    }

    public function getLocations(Request $request)
    {
        $userIp = $request->ip();
        $location = GeoIP::getLocation($userIp);

        $data = [
            'lat' => $location->lat,
            'lot' => $location->lon
        ];
        return $data;
    }

    public function information(){
        $user = Auth::user();
        return view('customer.profile.information', compact('user'));
    }

    public function account(){
        $user = Auth::user();
        return view('customer.profile.account', compact('user'));
    }

    public function update_address(Request $request){
        try {
            $user = auth()->user();

            $validator = Validator::make($request->all(), [
                'provinsi_user' => 'required',
                'kabupaten_user' => 'required',
                'kecamatan_user' => 'required',
                'kelurahan_user' => 'required',
                'latitude' => 'required',
                'longitude' => 'required',
                'alamat_lengkap' => 'required',
            ], [
                'provinsi_user.required' => 'Wajib diisi!',
                'kabupaten_user.required' => 'Wajib diisi!',
                'kecamatan_user.required' => 'Wajib diisi!',
                'kelurahan_user.required' => 'Wajib diisi!',
                'latitude.required' => 'Wajib diisi!',
                'longitude.required' => 'Wajib diisi!',
                'alamat_lengkap.required' => 'Wajib diisi!',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input = $request->except(['_token', '_method']);

            $user->update($input);
            if ($user) {
                return redirect()->back()->with('success', 'Data alamat berhasil diubah');
            } else {
                return redirect()->back()->with('errors', 'Data gagal alamat berhasil diubah');
            }
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function update_information_account(Request $request){
        try {
            $user = auth()->user();

            $validator = Validator::make($request->all(), [
                'nama' => 'required',
                'no_telp' => 'required',
            ], [
                'nama' => 'Wajib diisi',
                'no_hp' => 'Wajib diisi'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input = $request->except(['_token', '_method']);

            $user->update($input);
            if ($user) {
                return redirect()->route('customer.account.information')->with('success', 'Data produk berhasil diubah');
            } else {
                return redirect()->back()->with('errors', 'Data gagal produk berhasil diubah');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function update_email(Request $request){
        try {
            $user = auth()->user();

            $validator = Validator::make($request->all(), [
                'email' => 'required|email',
            ], [
                'email.required' => 'Wajib diisi',
                'email.email' => 'Harus berformat email'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input = $request->except(['_token', '_method']);

            $user->update($input);
            if ($user) {
                return redirect()->back()->with('success', 'Data email berhasil diubah');
            } else {
                return redirect()->back()->with('error', 'Data gagal email berhasil diubah');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function update_nama(Request $request){
        try {
            $user = auth()->user();

            $validator = Validator::make($request->all(), [
                'nama' => 'required|min:6',
            ], [
                'nama.required' => 'Wajib diisi!',
                'nama.min' => 'Minimal terdiri dari 6 karakter!'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input = $request->except(['_token', '_method']);

            $user->update($input);
            if ($user) {
                return redirect()->back()->with('success', 'Data nama berhasil diubah');
            } else {
                return redirect()->back()->with('error', 'Data gagal nama berhasil diubah');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function update_no_telp(Request $request){
        try {
            $user = auth()->user();

            $validator = Validator::make($request->all(), [
                'no_telp' => 'required|min:10',
            ], [
                'no_telp.required' => 'Wajib diisi',
                'no_telp.min' => 'Minimal 10 karakter'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }


            $input = $request->except(['_token', '_method']);

            $user->update($input);
            if ($user) {
                return redirect()->back()->with('success', 'Data no hp berhasil diubah');
            } else {
                return redirect()->back()->with('error', 'Data gagal no hp berhasil diubah');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function update_password(Request $request){
        try {
            $user = auth()->user();

            $validator = Validator::make($request->all(), [
                'password' => 'required',
            ], [
                'password.required' => 'Wajib diisi!'
            ]);

            $input = $request->except(['_token', '_method']);
            $input['password'] = bcrypt($request->password);

            $user->update($input);
            if ($user) {
                return redirect()->back()->with('success', 'Data password berhasil diubah');
            } else {
                return redirect()->back()->with('error', 'Data gagal password berhasil diubah');
            }
        } catch (\Throwable $th) {
            //throw $th;
        }
    }

    public function update_detail_account(Request $request){
        try {
            $user = auth()->user();
            if (!$user) {
                return redirect()->back()->with('error', 'Data user tidak ditemukan');
            }

            $validator = Validator::make($request->all(), [
                'nama' => 'required',
                'username' => 'required',
                'profile_photo_path' => 'required',
            ]);

            $input = $request->except(['_token', '_method']);

            if ($request->hasFile('profile_photo_path')) {
                File::delete('uploads/' . $user->profile_photo_path);

                $gambar = $request->file('profile_photo_path');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $input['profile_photo_path'] = $nama_gambar;
            } else {
                unset($input['profile_photo_path']);
            }

            $user->update($input);

            if ($user) {
                return redirect()->route('customer.account.information')->with('success', 'Data akun berhasil diubah');
            } else {
                return redirect()->back()->with('errors', 'Data akun gagal diubah');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function update_foto_profil(Request $request){
        try {
            $user = auth()->user();
            if (!$user) {
                return redirect()->back()->with('error', 'Data user tidak ditemukan');
            }

            $validator = Validator::make($request->all(), [
                'profile_photo_path' => 'required',
            ], [
                'profile_photo_path.required' => 'Wajib diisi!'
            ]);

            // dd($request->all());

            $input = $request->except(['_token', '_method']);

            if ($request->hasFile('profile_photo_path')) {
                File::delete('uploads/' . $user->profile_photo_path);

                $gambar = $request->file('profile_photo_path');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $input['profile_photo_path'] = $nama_gambar;
            } else {
                unset($input['profile_photo_path']);
            }

            $user->update($input);

            if ($user) {
                return redirect()->back()->with('success', 'Data akun berhasil diubah');
            } else {
                return redirect()->back()->with('error', 'Data akun gagal diubah');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
