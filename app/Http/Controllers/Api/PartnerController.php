<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Partner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class PartnerController extends Controller
{
    public function __construct(){
        // Ignored, really
        $this->middleware('auth')->only(['list']);
        $this->middleware('auth:api')->only(['delete', 'handle_status']);
    }

    public function list(){
        return view('admin.pages.partner.index');
    }

    public function submission(){
        return view('admin.pages.partner.submission');
    }

    public function unsubmission(){
        return view('admin.pages.partner.unsubmission');
    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partner = Partner::with('users')->get();

        return response()->json([
            'data' => $partner
        ]);   
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_user' => 'required',
            'nama_partner' => 'required',
            'nama_perusahaan_partner' => 'required',
            'provinsi_partner' => 'required',
            'kabupaten_partner' => 'required',
            'kecamatan_partner' => 'required',
            'kelurahan_partner' => 'required',
            'alamat_partner' => 'required',
            'foto_profil' => 'required|image|mimes:jpg,png,jpeg,webp',
            'foto_peternakan' => 'required|image|mimes:jpg,png,jpeg,webp',
            'lama_peternakan_berdiri' => 'required',
            'latitude' => 'required',
            'longitude' => 'required',
            'status' => 'required',
            'tanggal_lahir' => 'required',
            'jenis_kelamin' => 'required',
        ]);

        if($validator->fails()){
            return response()->json([
                $validator->errors(), 422
            ]);
        }

        $input = $request->all();

        if($request->has('foto_profil')){
            $gambar = $request->file('foto_profil');
            $nama_gambar = time().rand(1,9).'.'.$gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['foto_profil'] = $nama_gambar;
        }

        if($request->has('foto_peternakan')){
            $gambar = $request->file('foto_peternakan');
            $nama_gambar = time().rand(1,9).'.'.$gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['foto_peternakan'] = $nama_gambar;
        }
        // $input['password'] = bcrypt($request->password);

        $partner = Partner::create($input);

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $partner
        ]);
    }
    

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show(Partner $partner)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit(Partner $partner)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Partner $partner)
    {
        $validator = Validator::make($request->all(), [
            'id_user' => 'required',
            'nama_partner' => 'required',
            'nama_perusahaan_partner' => 'required',
            'provinsi_partner' => 'required',
            'kabupaten_partner' => 'required',
            'kecamatan_partner' => 'required',
            'kelurahan_partner' => 'required',
            'alamat_partner' => 'required',
            'foto_profil' => 'required',
        ]);
        
        if($validator->fails()){
            return response()->json([
                $validator->errors(), 422
            ]);
        }

        $input = $request->all();

        if($request->hasFile('foto_profil')){
            File::delete('uploads/'.$partner->foto_profil);
            $gambar = $request->file('foto_profil');
            $nama_gambar = time().rand(1,9).'.'.$gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['foto_profil'] = $nama_gambar;
        } else {
            unset($input['foto_profil']);
        }

        $partner->update($input);

        return response()->json([
            'message' => 'success',
            'data' => $partner
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy(Partner $partner)
    {
        File::delete('uploads/'.$partner->foto_profil);

        $partner->delete();

        return response()->json([
            'message' => 'success',
        ]);
    }

    public function partner_not_confirmed()
    {
        $partner = Partner::with('users')->where('status', 'Belum terverifikasi')->get();

        return response()->json(['message' => 'success', 'data' => $partner]);
    }

    public function partner_confirmed()
    {
        $partner = Partner::with('users')->where('status', 'Sudah diverifikasi')->get();

        return response()->json(['message' => 'success', 'data' => $partner]);
    }

    public function handle_status(Request $request, Partner $partner)
    {
        $partner->update([
            'status' => $request->status
        ]);

        return response()->json(['message' => 'success', 'data' => $partner]);
    }
}
