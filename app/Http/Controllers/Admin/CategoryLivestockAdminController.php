<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryLivestock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CategoryLivestockAdminController extends Controller
{
    public function add()
    {
        return view('admin.pages.category_livestock.create');
    }

    public function show($slug)
    {
        $categorylivestock = CategoryLivestock::where('slug', $slug)->first();

        // dd($categorylivestock);
        return view('admin.pages.category_livestock.edit', compact('categorylivestock'));
    }

    public function list()
    {
        $categorylivestock = CategoryLivestock::all();

        return view('admin.pages.category_livestock.index', compact('categorylivestock'));
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nama_kategori_hewan' => 'required',
                'deskripsi_kategori_hewan' => 'required',
                'gambar_kategori_hewan' => 'required|image|mimes:jpg,png,jpeg,webp',
            ], [
                'nama_kategori_hewan.required' => 'Nama kategori hewan wajib diisi.',
                'deskripsi_kategori_hewan.required' => 'Deskripsi kategori hewan wajib diisi.',
                'gambar_kategori_hewan.required' => 'Gambar kategori hewan wajib diisi dan harus berupa file gambar.',
                'gambar_kategori_hewan.image' => 'Gambar kategori hewan harus berupa file gambar.',
                'gambar_kategori_hewan.mimes' => 'Gambar kategori hewan harus memiliki format file jpg, png, jpeg, atau webp.',
                'gambar_kategori_hewan.max' => 'Gambar kategori hewan harus berukuran 1MB kebawah',
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input = $request->all();

            if ($request->has('gambar_kategori_hewan')) {
                $gambar = $request->file('gambar_kategori_hewan');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $input['gambar_kategori_hewan'] = $nama_gambar;

                $request->session()->put('gambar_kategori_hewan', $nama_gambar);
            }

            $slug = $this->generateSlug($input['nama_kategori_hewan']);
            $input['slug'] = $slug;

            CategoryLivestock::create($input);

            return redirect()->route('admin.categorylivestock.list')->with('success', 'Data kategori hewan berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function update(Request $request, $slug)
    {
        try {
            $categorylivestock = CategoryLivestock::where('slug', $slug)->first();

            $validator = Validator::make($request->all(), [
                'nama_kategori_hewan' => 'required',
                'deskripsi_kategori_hewan' => 'required',
                'gambar_kategori_hewan' => 'image|mimes:png,jpeg,jpg,gif,webp|max:2048',
            ], [
                'nama_kategori_hewan.required' => 'Nama kategori hewan wajib diisi.',
                'deskripsi_kategori_hewan.required' => 'Deskripsi kategori hewan wajib diisi.',
                'gambar_kategori_hewan.image' => 'Gambar kategori hewan harus berupa file gambar.',
                'gambar_kategori_hewan.mimes' => 'Gambar kategori hewan harus memiliki format file jpg, png, jpeg, atau webp.',
                'gambar_kategori_hewan.max' => 'Gambar kategori hewan harus berukuran 1MB kebawah',
            ]);

            $input = $request->except(['_token', '_method']);

            if ($request->hasFile('gambar_kategori_hewan')) {
                File::delete('uploads/' . $categorylivestock->gambar_kategori_hewan);
                $gambar = $request->file('gambar_kategori_hewan');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $input['gambar_kategori_hewan'] = $nama_gambar;
            } else {
                unset($input['gambar_kategori_hewan']);
            }

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $slug = $this->generateSlug($input['nama_kategori_hewan']);
            $input['slug'] = $slug;

            $categorylivestock->update($input);

            return redirect()->route('admin.categorylivestock.list')->with('success', 'Data kategori hewan berhasil diubah');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function destroy($slug)
    {
        try {
            $categorylivestock = CategoryLivestock::where('slug', $slug)->first();

            if ($categorylivestock) {
                File::delete('uploads/' . $categorylivestock->gambar_kategori_product);

                $categorylivestock->delete();

                return redirect()->route('admin.categorylivestock.list')->with('success', 'Data berhasil dihapus');
            } else {
                return redirect()->route('admin.categorylivestock.list')->with('error', 'Data tidak ditemukan');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function generateSlug($nama_kategori_hewan)
    {
        $slug = strtolower($nama_kategori_hewan);
        $slug = str_replace(' ', '-', $slug);
        return $slug;
    }
}
