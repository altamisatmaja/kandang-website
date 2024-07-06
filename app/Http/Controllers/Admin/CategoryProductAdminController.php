<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class CategoryProductAdminController extends Controller
{
    public function add()
    {
        $slug = 'Tambah Kategori';
        return view('admin.pages.category_product.create', compact('slug'));
    }

    public function list()
    {
        $categoryproduct = CategoryProduct::all();

        return view('admin.pages.category_product.index', compact('categoryproduct'));
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'nama_kategori_product' => 'required',
                'deskripsi_kategori_product' => 'required',
                'gambar_kategori_product' => 'required|image|mimes:png,jpeg,jpg,gif,webp|max:2048',
            ], [
                'nama_kategori_product.required' => 'Nama kategori produk wajib diisi.',
                'deskripsi_kategori_product.required' => 'Deskripsi kategori produk wajib diisi.',
                'gambar_kategori_product.required' => 'Gambar kategori produk wajib diisi dan harus berupa file gambar.',
                'gambar_kategori_product.image' => 'Gambar kategori produk harus berupa file gambar.',
                'gambar_kategori_product.mimes' => 'Gambar kategori produk harus memiliki format file jpg, png, jpeg, atau webp.',
                'gambar_kategori_product.max' => 'Gambar kategori produk harus berukuran 1MB kebawah',
            ]);
            

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input = $request->all();

            if ($request->hasFile('gambar_kategori_product')) {
                $gambar = $request->file('gambar_kategori_product');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $input['gambar_kategori_product'] = $nama_gambar;

                $request->session()->put('gambar_kategori_product', $nama_gambar);
            }

            $slug = $this->generateSlug($input['nama_kategori_product']);
            $input['slug_kategori_product'] = $slug;

            CategoryProduct::create($input);

            return redirect()->route('admin.category.list')->with('success', 'Data kategori product berhasil ditambahkan');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function show($slug_kategori_product)
    {
        $categoryproduct = CategoryProduct::where('slug_kategori_product', $slug_kategori_product)->first();
        
        return view('admin.pages.category_product.edit', compact('categoryproduct'));
    }

    public function update(Request $request, $slug_kategori_product)
    {
        try {
            $categoryproduct = CategoryProduct::where('slug_kategori_product', $slug_kategori_product)->first();
    
            if (!$categoryproduct) {
                return redirect()->back()->with('error', 'Data kategori produk tidak ditemukan');
            }
    
            $validator = Validator::make($request->all(), [
                'nama_kategori_product' => 'required',
                'deskripsi_kategori_product' => 'required',
                'gambar_kategori_product' => 'image|mimes:png,jpeg,jpg,gif,webp|max:2048',
            ], [
                'nama_kategori_product.required' => 'Nama kategori produk wajib diisi.',
                'deskripsi_kategori_product.required' => 'Deskripsi kategori produk wajib diisi.',
                'gambar_kategori_product.image' => 'Gambar kategori produk harus berupa file gambar.',
                'gambar_kategori_product.mimes' => 'Gambar kategori produk harus memiliki format file jpg, png, jpeg, atau webp.',
                'gambar_kategori_product.max' => 'Gambar kategori produk harus berukuran 1MB kebawah',
            ]);
    
            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }
    
            $input = $request->except(['_token', '_method' ]);
    
            if ($request->hasFile('gambar_kategori_product')) {
                File::delete('uploads/' . $categoryproduct->gambar_kategori_product);
    
                $gambar = $request->file('gambar_kategori_product');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $input['gambar_kategori_product'] = $nama_gambar;
            } else {
                unset($input['gambar_kategori_product']);
            }
    
            $slug = $this->generateSlug($input['nama_kategori_product']);
            $input['slug_kategori_product'] = $slug;
    
            $categoryproduct->update($input);
    
            return redirect()->route('admin.category.list')->with('success', 'Data kategori produk berhasil diubah');
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
    

    public function destroy($slug_kategori_product)
    {
        try {
            $categoryproduct = CategoryProduct::where('slug_kategori_product', $slug_kategori_product)->first();

            if ($categoryproduct) {
                File::delete('uploads/' . $categoryproduct->gambar_kategori_product);

                $categoryproduct->delete();

                return redirect()->route('admin.category.list')->with('success', 'Data berhasil dihapus');
            } else {
                return redirect()->route('admin.category.list')->with('error', 'Data tidak ditemukan');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }


    public function generateSlug($nama_product)
    {
        try {
            $slug = strtolower($nama_product);
            $slug = str_replace(' ', '-', $slug);

            return $slug;
        } catch (\Exception $e) {
            throw $e;
        }
    }
}
