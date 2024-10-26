<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class ProductosApiController extends Controller
{
    public function getProductosData()
    {
        // Token de la nueva API
        $token = '4|7zRejOmOkb67njVQp0fQkCbsVtPnJl8dsKanaewZd73984b5';
        $url = "http://3.20.219.68/api/productos";

        // Llamada HTTP a la API
        $response = Http::withToken($token)->get($url);

        return $response->json();
    }
}
