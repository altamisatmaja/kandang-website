<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\CategoryLivestock;
use App\Models\ConditionLivestock;
use App\Models\Farm;
use App\Models\GenderLivestock;
use App\Models\Partner;
use App\Models\TypeLivestock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class FarmPartnerController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Read data peternakan
     */
    public function list()
    {
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();
        $farms = Farm::with(['type_livestocks', 'gender_livestocks', 'partner', 'condition_livestock', 'category_livestock'])->where('id_partner', $partner->id)->get();
        // dd($farms);
        $farmdata = $farms->map(function ($farms){
            return [
                'nama_jenis_hewan' => $farms->type_livestocks->nama_jenis_hewan,
            ];
        });

        return view('partner.pages.farm.index', compact('farms', 'partner'));
    }

    /**
     * View create data peternakan
     */
    public function create()
    {
        $user = Auth::user();

        $partner = Partner::where('id_user', $user->id)->first();
        $typelivestocks = TypeLivestock::all();
        $genderlivestocks = GenderLivestock::all();
        $conditionlivestock = ConditionLivestock::all();
        $categorylivestock = CategoryLivestock::all();

        return view('partner.pages.farm.create', compact('typelivestocks', 'genderlivestocks', 'conditionlivestock', 'categorylivestock', 'partner'));
    }

    /**
     * View edit data peternakan
     */
    public function update($slug_farm)
    {
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();
        $farm = Farm::with(['type_livestocks', 'gender_livestocks', 'partner', 'condition_livestock', 'category_livestock'])->where('slug_farm', $slug_farm)->first();
        $partnerid = $farm->id;

        $typelivestocks = TypeLivestock::all();
        $genderlivestocks = GenderLivestock::all();
        $conditionlivestock = ConditionLivestock::all();
        $categorylivestock = CategoryLivestock::all();

        return view('partner.pages.farm.edit', compact('partner', 'farm', 'partnerid', 'typelivestocks', 'genderlivestocks', 'conditionlivestock', 'categorylivestock'));
    }

    /**
     * Read page tambah data peternakan
     */
    public function add()
    {
        $typelivestocks = TypeLivestock::all();
        $genderlivestocks = GenderLivestock::all();
        $conditionlivestock = ConditionLivestock::all();
        $categorylivestock = CategoryLivestock::all();

        return view('partner.pages.farm.create', compact('typelivestocks', 'genderlivestocks', 'conditionlivestock', 'categorylivestock'));
    }

    /**
     * Tambah data peternakan
     */
    public function store(Request $request)
    {
        try {
            $user = Auth::user();
            $partner = Partner::where('id_user', $user->id)->first();
            // dd($request->all());

            $validator = Validator::make($request->all(), [
                'id_kondisi_hewan' => 'required',
                'id_jenis_gender_hewan' => 'required',
                'id_jenis_hewan' => 'required',
                'lahir_hewan' => 'required|date',
                'deskripsi_hewan' => 'required',
                'berat_badan_hewan' => 'required|numeric',
                'id_kategori_hewan' => 'required',
                'nama_hewan' => 'required',
                'kode_hewan' => 'required',
            ], [
                'id_kondisi_hewan.required' => 'Wajib diisi!',
                'id_jenis_gender_hewan.required' => 'Wajib diisi!',
                'id_jenis_hewan.required' => 'Wajib diisi!',
                'lahir_hewan.required' => 'Wajib diisi!',
                'deskripsi_hewan.required' => 'Wajib diisi!',
                'berat_badan_hewan.required' => 'Wajib diisi!',
                'id_kategori_hewan.required' => 'Wajib diisi!',
                'nama_hewan.required' => 'Wajib diisi!',
                'kode_hewan.required' => 'Wajib diisi!',
            ]);

            if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $data = $request->all();
            $data['id_partner'] = $partner->id;
            $data['slug_farm'] = $this->generateSlug($request->nama_hewan, $request->kode_hewan);

            Farm::create($data);

            return redirect()->route('partner.farm.list')->with('success', 'Data hewan telah berhasil ditambahkan!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Edit data peternakan
     */
    public function edit(Request $request, $slug_farm)
    {
        try {
            $user = Auth::user();
            $partner = Partner::where('id_user', $user->id)->first();

            $validator = Validator::make($request->all(), [
                'id_kondisi_hewan' => 'required',
                'id_jenis_gender_hewan' => 'required',
                'id_jenis_hewan' => 'required',
                'lahir_hewan' => 'required|date',
                'deskripsi_hewan' => 'required',
                'berat_badan_hewan' => 'required|numeric',
                'id_kategori_hewan' => 'required',
                'nama_hewan' => 'required',
                'kode_hewan' => 'required',
            ], [
                'id_kondisi_hewan.required' => 'Wajib diisi!',
                'id_jenis_gender_hewan.required' => 'Wajib diisi!',
                'id_jenis_hewan.required' => 'Wajib diisi!',
                'lahir_hewan.required' => 'Wajib diisi!',
                'deskripsi_hewan.required' => 'Wajib diisi!',
                'berat_badan_hewan.required' => 'Wajib diisi!',
                'id_kategori_hewan.required' => 'Wajib diisi!',
                'nama_hewan.required' => 'Wajib diisi!',
                'kode_hewan.required' => 'Wajib diisi!',
            ]);

            if ($validator->fails()) {
                return redirect()
                    ->back()
                    ->withErrors($validator)
                    ->withInput();
            }

            $data = $request->all();
            $data['id_partner'] = $partner->id;
            $data['slug_farm'] = $this->generateSlug($request->nama_hewan, $request->kode_hewan);

            $farm = Farm::where('slug_farm', $slug_farm)->firstOrFail();
            $farm->update($data);

            return redirect()->route('partner.farm.list')->with('success', 'Data hewan telah berhasil diubah!');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    /**
     * Hapus data
     */
    public function destroy($slug_farm)
    {
        $farm = Farm::where('slug_farm', $slug_farm)->first();

        if ($farm) {
            $farmid = $farm->id;

            Farm::destroy($farmid);

            return redirect()->route('partner.farm.list')->with('success', 'Data peternakan berhasil dihapus');
        } else {
            return redirect()->route('partner.farm.list')->with('status', 'Data peternakan gagal dihapus');
        }
    }

    /**
     * Generate slug
     */
    public function generateSlug($nama_hewan, $kode_hewan)
    {
        $slug_farm = strtolower($nama_hewan . '-' . $kode_hewan);
        $slug_farm = str_replace(' ', '-', $slug_farm);
        return $slug_farm;
    }
}
