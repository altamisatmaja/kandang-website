<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryLivestock;
use App\Models\CategoryProduct;
use App\Models\TypeLivestock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class TypeLivestockAdminController extends Controller
{
    public function generateSlug($nama_jenis_hewan)
    {
        try {
            $slug = strtolower($nama_jenis_hewan);
            $slug = str_replace(' ', '-', $slug);

            return $slug;
        } catch (\Exception $e) {
            throw $e;
        }
    }

    public function index(){
        $typelivestock = TypeLivestock::with('categorylivestock')->get();

        return view('admin.pages.typelivestock.index', compact('typelivestock'));
    }

    public function create(){
        $categorylivestocks = CategoryLivestock::all();
        return view('admin.pages.typelivestock.create', compact('categorylivestocks'));
    }

    public function edit($slug_typelivestocks){
        $typelivestocks = TypeLivestock::where('slug_typelivestocks', $slug_typelivestocks)->first();
        $categorylivestocks = CategoryLivestock::all();

        return view('admin.pages.typelivestock.edit', compact('typelivestocks', 'categorylivestocks'));
    }

    /**
     * Create Execute
     */

    public function store(Request $request){
        try {
            $validator = Validator::make($request->all(), [
                'id_category_livestocks' => 'required',
                'nama_jenis_hewan' => 'required',
                'deskripsi_jenis_hewan' => 'required',
                'gambar_livestocks' => 'required|image|mimes:png,jpeg,jpg,gif,webp|max:2048',
            ], [
                'nama_jenis_hewan.required' => 'Nama jenis hewan wajib diisi.',
                'deskripsi_jenis_hewan.required' => 'Deskripsi jenis hewan wajib diisi.',
                'gambar_livestocks.required' => 'Gambar jenis hewan wajib diisi dan harus berupa file gambar.',
                'gambar_livestocks.image' => 'Gambar jenis hewan harus berupa file gambar.',
                'gambar_livestocks.mimes' => 'Gambar jenis hewan harus memiliki format file jpg, png, jpeg, atau webp.',
                'gambar_livestocks.max' => 'Gambar jenis hewan harus berukuran 1MB kebawah',
            ]);


            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input = $request->all();

            if ($request->hasFile('gambar_livestocks')) {
                $gambar = $request->file('gambar_livestocks');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $input['gambar_livestocks'] = $nama_gambar;

                $request->session()->put('gambar_livestocks', $nama_gambar);
            }

            $slug = $this->generateSlug($input['nama_jenis_hewan']);
            $input['slug_typelivestocks'] = $slug;

            TypeLivestock::create($input);

            return redirect()->route('admin.typelivestock.list')->with('success', 'Data jenis hewan berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $slug_typelivestocks){
        try {
            $typelivestocks = TypeLivestock::where('slug_typelivestocks', $slug_typelivestocks)->first();
            // dd($typelivestocks);

            if (!$typelivestocks) {
                return redirect()->back()->with('error', 'Data jenis hewan tidak ditemukan');
            }

            $validator = Validator::make($request->all(), [
                'nama_jenis_hewan' => 'required',
                'deskripsi_jenis_hewan' => 'required',
                'gambar_livestocks' => 'image|mimes:png,jpeg,jpg,gif,webp|max:2048',
            ], [
                'nama_jenis_hewan.required' => 'Nama jenis hewan wajib diisi.',
                'deskripsi_jenis_hewan.required' => 'Deskripsi jenis hewan wajib diisi.',
                'gambar_livestocks.image' => 'Gambar jenis hewan harus berupa file gambar.',
                'gambar_livestocks.mimes' => 'Gambar jenis hewan harus memiliki format file jpg, png, jpeg, atau webp.',
                'gambar_livestocks.max' => 'Gambar jenis hewan harus berukuran 1MB kebawah',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input = $request->except(['_token', '_method' ]);

            if ($request->hasFile('gambar_livestocks')) {
                File::delete('uploads/' . $typelivestocks->gambar_livestocks);

                $gambar = $request->file('gambar_livestocks');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $input['gambar_livestocks'] = $nama_gambar;
            } else {
                unset($input['gambar_livestocks']);
            }

            $slug = $this->generateSlug($input['nama_jenis_hewan']);
            $input['slug_typelivestocks'] = $slug;

            $typelivestocks->update($input);

            return redirect()->route('admin.typelivestock.list')->with('success', 'Data jenis hewan berhasil ubah');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function destroy($slug_typelivestocks){
        try {
            $typelivestocks = TypeLivestock::where('slug_typelivestocks', $slug_typelivestocks)->first();

            if($typelivestocks){
                File::delete('uploads/'. $typelivestocks->gambar_livestocks);

                $typelivestocks->delete();
                return redirect()->route('admin.typelivestocks.list')->with('success', 'Data berhasil dihapus');
            } else {
                return redirect()->route('admin.typelivestocks.list')->with('error', 'Data tidak ditemukan');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
