<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PlayerController extends Controller
{
    public function dettaglio($name){


        @dd($name);
        return view('player.dettaglioGiocatore');
    }
}
