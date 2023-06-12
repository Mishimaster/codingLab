<?php

namespace App\Http\Controllers;

use App\Models\Pokemon;

use GuzzleHttp\Client;
use Illuminate\Http\Request;

class PokemonController extends Controller
{
    public function data(){
        $client = new Client();
        
        $response = $client->request('GET','https://pokeapi.co/api/v2/generation/1/' );

        $pokemons = json_decode( $response->getBody()->getContents());


        foreach($pokemons->pokemon_species as $item){
                $pokemon = new Pokemon();
                $pokemon->name = $item->name;
                $pokemon->slug = $item->name;
                $pokemon->save();
        }

        echo 'reussi';
    }
}
