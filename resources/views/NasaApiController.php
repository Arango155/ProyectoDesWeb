<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class NasaApiController extends Controller
{
    public function getNasaData()
    {
        // API
        $apiKey = env('NASA_API_KEY'); 

       
        $url = "https://api.nasa.gov/planetary/apod?api_key={$apiKey}";

        // HTTP 
        $response = Http::get($url);


        return $response->json();
    }
}
