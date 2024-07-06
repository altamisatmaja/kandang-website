<?php

namespace App\Http\Controllers\Web;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
use Torann\GeoIP\Facades\GeoIP;

class AIController extends Controller
{
    public function index(Request $request){
        $locationData = $this->getLocations($request);
        $latitude = $locationData['lat'];
        $longitude = $locationData['lot'];
        $baseurlapi =  env('BASE_URL_AI');

        // $url = $baseurlapi.'/'.$latitude.'/'.$longitude.'/';
        // $response = Http::get($url);
        // dd($response);
        // dd($url);
        dd($this->fetchDataAI($baseurlapi, $latitude, $longitude));
        
        // return $this->fetchDataAI($latitude, $longitude);
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
    
    public function fetchDataAI($baseurlapi, $latitude, $longitude){
        // $locationData = $this->getLocations($request);
        // $latitude = $locationData['lat'];
        // $longitude = $locationData['lot'];
        // $baseurlapi =  env('BASE_URL_AI');
        $url = $baseurlapi.'/product/'.$latitude.'/'.$longitude.'/';
        // dd($url);

        try {
            $response = Http::get($url);
            // dd(json_decode($response));

            if ($response->successful()) {
                $data = $response->json();
                dd($data);
                return response()->json($data);
            } else {
                return response()->json([
                    'error' => 'Unable to fetch data',
                    'message' => $response->body()
                ], $response->status());
            }

        } catch (\Exception $e) {
            return response()->json([
                'error' => 'Unable to fetch data',
                'message' => $e->getMessage()
            ], 500);
        }
    }
}
