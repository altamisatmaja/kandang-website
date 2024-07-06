<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;
use Torann\GeoIP\Facades\GeoIP;

class LocationController extends Controller
{
    public function index(Request $request)
    {
        $userIp = $request->ip();
        $location = GeoIP::getLocation($userIp);

        $data = [
            'lat' => $location->lat,
            'lot' => $location->lon
        ];
        dd($data);
        return $data;
    }

    private function aStarAlgorithm($userLatitude, $userLongitude, $radius)
    {
        $nearestProducts = [];

        $products = Product::with('partner')->get();
        foreach ($products as $product) {
            foreach ($product->partner as $partner) {
                $distance = $this->calculateEuclideanDistance($userLatitude, $userLongitude, $partner->latitude, $partner->longitude);

                if ($distance < $radius) {
                    $nearestProducts[] = [
                        'product' => $product,
                        'distance' => $distance
                    ];
                }
            }
        }

        // dd($nearestProducts);
        usort($nearestProducts, function ($a, $b) {
            return $a['distance'] <=> $b['distance'];
        });

        return $nearestProducts;
    }

    private function calculateEuclideanDistance($lat1, $lon1, $lat2, $lon2)
    {
        return sqrt(pow(($lat2 - $lat1), 2) + pow(($lon2 - $lon1), 2));
    }
}
