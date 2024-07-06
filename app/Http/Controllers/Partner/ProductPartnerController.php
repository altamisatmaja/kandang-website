<?php

namespace App\Http\Controllers\Partner;

use App\Http\Controllers\Controller;
use App\Models\CategoryLivestock;
use App\Models\CategoryProduct;
use App\Models\GenderLivestock;
use App\Models\Partner;
use App\Models\Product;
use App\Models\TypeLivestock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use File;

class ProductPartnerController extends Controller
{
    public function index()
    {
        $user = Auth::user();

        $partner = Partner::where('id_user', $user->id)->first();
        // dd($partner);
        $product = Product::with('typelivestocks', 'gender_livestocks', 'categoryproduct', 'categorylivestocks', 'testimonial', 'reviews')->where('id_partner', $partner->id)->where('status', 'Aktif')->get();
        // dd($product);
        $productdata = $product->map(function ($product) {
            return [
                'nama_product' => $product->nama_product,
                'nama_kategori_product' => $product->categoryproduct->first()->nama_kategori_product,
                'harga_product' => $product->harga_product,
                'gambar_hewan' => $product->gambar_hewan,
                'lahir_hewan' => $product->lahir_hewan,
                'nama_gender' => $product->gender_livestocks->first()->nama_gender,
                'berat_hewan_ternak' => $product->berat_hewan_ternak,
                'stok_hewan_ternak' => $product->stok_hewan_ternak,
                'terjual' => $product->terjual,
                'deskripsi_product' => $product->deskripsi_product,
                'nama_jenis_hewan' => $product->typelivestocks->first()->nama_jenis_hewan,
                'nama_kategori_hewan' => $product->categorylivestocks->first()->nama_kategori_hewan,
                'created_at' => $product->created_at,
                'slug_product' => $product->slug_product,
            ];
        });

        // dd($productdata);

        return view('partner.pages.product.list', compact('partner', 'productdata'));
    }

    public function create()
    {
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();

        $categoryproduct = CategoryProduct::all();
        $typelivestocks = TypeLivestock::all();
        $gender_livestocks = GenderLivestock::all();
        $partnerall = Partner::all();
        $categorylivestock = CategoryLivestock::all();

        return view('partner.pages.product.create', compact('partner', 'categoryproduct', 'typelivestocks', 'gender_livestocks', 'partnerall', 'categorylivestock'));
    }

    public function store(Request $request)
    {
        try {
            $validator = Validator::make($request->all(), [
                'harga_product' => 'required',
                'id_kategori' => 'required',
                'nama_product' => 'required',
                'diskon' => 'required',
                'id_partner' => 'required',
                'gambar_hewan' => 'required|image|mimes:jpg,png,jpeg,webp',
                'id_jenis_gender_hewan' => 'required',
                'lahir_hewan' => 'required',
                'berat_hewan_ternak' => 'required',
                'stok_hewan_ternak' => 'required',
                'terjual' => 'required',
                'deskripsi_product' => 'required',
                'id_typelivestocks' => 'required'
            ],[
                'harga_product.required' => 'Wajib diisi',
                'id_kategori.required' => 'Wajib diisi',
                'nama_product.required' => 'Wajib diisi',
                'diskon.required' => 'Wajib diisi',
                'id_partner.required' => 'Wajib diisi',
                'gambar_hewan.required' => 'Wajib diisi',
                'gambar_hewan.image' => 'Gambar harus berupa jpg, png, jpeg, webp',
                'id_jenis_gender_hewan.required' => 'Wajib diisi',
                'lahir_hewan.required' => 'Wajib diisi',
                'berat_hewan_ternak.required' => 'Wajib diisi',
                'stok_hewan_ternak.required' => 'Wajib diisi',
                'terjual.required' => 'Wajib diisi',
                'deskripsi_product.required' => 'Wajib diisi',
                'id_typelivestocks.required' => 'Wajib diisi'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input = $request->all();

            if ($request->has('gambar_hewan')) {
                $gambar = $request->file('gambar_hewan');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $input['gambar_hewan'] = $nama_gambar;
            }

            $slug = $this->generateSlug($input['nama_product'], $input['deskripsi_product']);

            $input['slug_product'] = $slug;
            $input['pengiriman'] = 'Pengiriman Internal';

            $product = Product::create($input);
            // dd($product);

            if ($product) {
                return redirect()->route('partner.product.list')->with('success', 'Data produk berhasil dilisting');
            } else {
                return redirect()->back()->with('errors', 'Data gagal produk berhasil dilisting');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('errors', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function generateSlug($nama_product, $deskripsi_product)
    {
        $words = explode(' ', $deskripsi_product);
        $kata_pertama = array_slice($words, 0, 2);
        $deskripsiSnippet = implode('-', $kata_pertama);

        $slug_farm = strtolower($nama_product . '-' . $deskripsiSnippet);
        $slug_farm = str_replace(' ', '-', $slug_farm);
        return $slug_farm;
    }

    public function show($slug_product)
    {
        $user = Auth::user();
        $partner = Partner::where('id_user', $user->id)->first();
        $products = Product::with('typelivestocks', 'gender_livestocks', 'categoryproduct', 'categorylivestocks')->where('slug_product', $slug_product)->first();
        // dd($products);

        $categoryproduct = CategoryProduct::all();
        $typelivestocks = TypeLivestock::all();
        $gender_livestocks = GenderLivestock::all();
        $categorylivestock = CategoryLivestock::all();

        return view('partner.pages.product.edit', compact('products', 'partner', 'categoryproduct', 'typelivestocks', 'gender_livestocks', 'categorylivestock'));
    }

    public function edit() {}

    public function update(Request $request, $slug_product)
    {
        // dd($request->all());
        try {
            $product = Product::where('slug_product', $slug_product)->first();

            if (!$product) {
                return redirect()->back()->with('error', 'Data produk tidak ditemukan');
            }

            $validator = Validator::make($request->all(), [
                'harga_product' => 'required',
                'id_kategori' => 'required',
                'nama_product' => 'required',
                'kode_hewan' => 'required',
                'diskon' => 'required',
                'id_partner' => 'required',
                'gambar_hewan' => 'required|image|mimes:jpg,png,jpeg,webp',
                'id_jenis_gender_hewan' => 'required',
                'lahir_hewan' => 'required',
                'berat_hewan_ternak' => 'required',
                'stok_hewan_ternak' => 'required',
                'terjual' => 'required',
                'deskripsi_product' => 'required',
                'id_typelivestocks' => 'required'
            ],[
                'harga_product.required' => 'Wajib diisi',
                'id_kategori.required' => 'Wajib diisi',
                'nama_product.required' => 'Wajib diisi',
                'diskon.required' => 'Wajib diisi',
                'kode_hewan.required' => 'Wajib diisi',
                'id_partner.required' => 'Wajib diisi',
                'gambar_hewan.required' => 'Wajib diisi',
                'gambar_hewan.image' => 'Gambar harus berupa jpg, png, jpeg, webp',
                'id_jenis_gender_hewan.required' => 'Wajib diisi',
                'lahir_hewan.required' => 'Wajib diisi',
                'berat_hewan_ternak.required' => 'Wajib diisi',
                'stok_hewan_ternak.required' => 'Wajib diisi',
                'terjual.required' => 'Wajib diisi',
                'deskripsi_product.required' => 'Wajib diisi',
                'id_typelivestocks.required' => 'Wajib diisi'
            ]);

            if ($validator->fails()) {
                return redirect()->back()->withErrors($validator)->withInput();
            }

            $input = $request->except(['_token', '_method']);

            if ($request->hasFile('gambar_hewan')) {
                File::delete('uploads/' . $product->gambar_hewan);

                $gambar = $request->file('gambar_hewan');
                $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
                $gambar->move('uploads', $nama_gambar);
                $input['gambar_hewan'] = $nama_gambar;
            } else {
                unset($input['gambar_hewan']);
            }

            $slug = $this->generateSlug($input['nama_product'], $input['deskripsi_product']);

            $input['slug_product'] = $slug;
            $product->update($input);

            if ($product) {
                return redirect()->route('partner.product.list')->with('success', 'Data produk berhasil diubah');
            } else {
                return redirect()->back()->with('error', 'Data gagal produk berhasil diubah');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('errors', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }

    public function destroy(Request $request, $slug_product)
    {
        try {
            $product = Product::where('slug_product', $slug_product)->first();

            if ($product) {
                // dd($product);
                // $validator = Validator::make($request->all(), [
                //     'status' => 'required'
                // ], [
                //     'status' => 'Status wajib diisi'
                // ]);

                // if ($validator->fails()){
                //     return redirect()->back()->withErrors($validator)->withInput();
                // }

                // $input = $request->except(['_token', '_method' ]);
                $product->update([
                    'status' => 'Tidak Aktif',
                ]);

                return redirect()->route('partner.product.list')->with('success', 'Data berhasil dihapus');
            } else {
                return redirect()->route('partner.product.list')->with('error', 'Data tidak ditemukan');
            }
        } catch (\Exception $e) {
            return redirect()->back()->with('error', 'Terjadi kesalahan: ' . $e->getMessage());
        }
    }
}
