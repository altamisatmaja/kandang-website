<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Product;
use Illuminate\Support\Facades\Http;
use Torann\GeoIP\Facades\GeoIP;


class AIApiController extends Controller
{
    public function index(){
        $products = Product::with('partner', 'typelivestocks', 'categoryproduct', 'categorylivestocks')->where('status', 'Aktif')->get();

        return response()->json([
            'status' => true,
            'message' => 'success',
            'data' => $products,
        ]);
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

    public function nearest_view(Request $request){
        $locationData = $this->getLocations($request);
        $latitude = $locationData['lat'];
        $longitude = $locationData['lot'];

        return view('pages.market.nearest', compact('latitude', 'longitude'));
    }

    public function getProduct(Request $request)
    {
        $userIp = $request->ip();
        $location = GeoIP::getLocation($userIp);
        // dd($location);

        $latitude = $location['lat'];
        $longitude = $location['lon'];
        $response = Http::get("http://127.0.0.1:5000/product/{$latitude}/{$longitude}/");

        if ($response->successful()) {
            $data = $response->json();
            return response()->json($data, 200);
        } else {
            return response()->json(['error' => 'Unable to fetch data'], $response->status());
        }
    }

}
