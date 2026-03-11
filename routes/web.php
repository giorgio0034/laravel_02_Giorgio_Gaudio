<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Controllers\PublicController;
use \App\Http\Controllers\PlayerController;



Route::get('/', [PublicController::class,'homepage'])->name('homepage');

Route::get('/Home', function () {

    $title='Tennista';
    return view('welcome',['titolo'=>$title]);//passaggi di dati alla vista

    //chiave dell'array- NOME DELLA VARIABILE SULLA VISTA
    //valore - il dato in sè

})->name('homepage');//metodo name() per dare il nome alla rotta;

Route::get('/Chi-siamo',[PublicController::class, 'chiSiamo' ] )->name('chi.siamo');
//! ROTTA PARAMETRICA rotta che accetta un parametro
Route::get('/Chi-siamo/dettaglio/{name}',[PlayerController::class, 'dettaglio' ] )->name('player.detail');


Route::get('/Servizi', function () {
    return view('Servizi');
});




