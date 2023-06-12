<?php

namespace App\Http\Controllers;

use GuzzleHttp\Client;
use Illuminate\Support\Facades\Http;
// importe le model Location


class LocationController extends Controller
{
    public function data()
    {
        $response = Http::get('https://pokeapi.co/api/v2/region/1');
        dd(json_decode($response->getBody()->getContents()));
    }
}
