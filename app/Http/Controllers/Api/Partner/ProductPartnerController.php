<?php

namespace App\Http\Controllers\Api\Partner;

use App\Http\Controllers\Controller;
use App\Models\CategoryProduct;
use App\Models\GenderLivestock;
use App\Models\Partner;
use App\Models\Product;
use App\Models\TypeLivestock;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Validator;

class ProductPartnerController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth')->only('list');
        // $this->middleware('auth:api')->only(['delete']);
    }

    public function list()
    {
        $categoryproduct = CategoryProduct::all();
        $typelivestocks = TypeLivestock::all();
        $gender_livestocks = GenderLivestock::all();
        $partner = Partner::all();

        return view('admin.pages.product.index', compact('categoryproduct', 'typelivestocks', 'gender_livestocks', 'partner'));
    }

    public function index($username)
    {
        $user = User::where('username', $username)->first();
        // dd($user);

        if (!$user) {
            return response()->json([
                'message' => 'User not found',
            ], 404);
        }

        $products = Product::whereHas('partner', function ($query) use ($user) {
            $query->where('id_user', $user->id);
        })->with('typelivestocks', 'gender_livestocks', 'partner', 'categoryproduct')->get();

        return response()->json([
            'message' => 'success',
            'data' => $products,
        ]);
    }

    public function store(Request $request, $username)
    {
        $user = User::where('username', $username)->first();

        if (!$user) {
            return response()->json([
                'message' => 'Partner tidak ada',
            ], 404);
        }

        $validator = Validator::make($request->all(), [
            'harga_product' => 'required',
            'id_kategori' => 'required',  // done
            'nama_product' => 'required',
            'tags' => 'required',
            'diskon' => 'required',
            'id_partner' => 'required',  // done
            'gambar_hewan' => 'required|image|mimes:jpg,png,jpeg,webp',
            'id_jenis_gender_hewan' => 'required',  // done
            'lahir_hewan' => 'required',
            'berat_hewan_ternak' => 'required',
            'stok_hewan_ternak' => 'required',
            'terjual' => 'required',
            'deskripsi_product' => 'required',
            'id_typelivestocks' => 'required',
            // 'slug_product' => 'required',
        ]);

        if ($validator->fails()) {
            return response()->json(
                $validator->errors(), 422
            );
        }

        $input = $request->all();

        if ($request->has('gambar_hewan')) {
            $gambar = $request->file('gambar_hewan');
            $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar_hewan'] = $nama_gambar;
        }

        $slug = $this->generateSlug($input['nama_product']);

        $input['slug_product'] = $slug;

        // $input['id_partner'] = $user->id;

        $product = Product::create($input);

        return response()->json([
            'success' => true,
            'message' => 'success',
            'data' => $product
        ]);
    }

    public function update(Request $request, Product $product, $username)
    {
        $user = User::where('username', $username)->first();
        // dd($user);

        $validator = Validator::make($request->all(), [
            'harga_product' => 'required',
            'id_kategori' => 'required',  // done
            'nama_product' => 'required',
            'tags' => 'required',
            'diskon' => 'required',
            'id_partner' => 'required',  // done
            'id_jenis_gender_hewan' => 'required',  // done
            'lahir_hewan' => 'required',
            'berat_hewan_ternak' => 'required',
            'stok_hewan_ternak' => 'required',
            'terjual' => 'required',
            'deskripsi_product' => 'required',
            'id_typelivestocks' => 'required',
            'slug_product' => 'required'
        ]);

        if ($validator->fails()) {
            return response()->json(
                $validator->errors(), 422
            );
        }

        $input = $request->all();

        if ($request->hasFile('gambar_hewan')) {
            File::delete('uploads/' . $product->gambar_hewan);
            $gambar = $request->file('gambar_hewan');
            $nama_gambar = time() . rand(1, 9) . '.' . $gambar->getClientOriginalExtension();
            $gambar->move('uploads', $nama_gambar);
            $input['gambar_hewan'] = $nama_gambar;
        } else {
            unset($input['gambar_hewan']);
        }

        $slug = $this->generateSlug($input['nama_product']);

        $input['slug_product'] = $slug;

        // $input['id_partner'] = $user->id;

        $product->update($input);

        return response()->json([
            'success' => true,
            'message' => 'succes',
            'data' => $product
        ]);
    }

    public function destroy(Product $product)
    {
        File::delete('uploads/' . $product->gambar_product);
        $product->delete();

        return response()->json([
            'message' => 'success',
            'data' => $product,
        ]);
    }

    public function generateSlug($nama_product)
    {
        $slug = strtolower($nama_product);
        $slug = str_replace(' ', '-', $slug);
        return $slug;
    }
}
