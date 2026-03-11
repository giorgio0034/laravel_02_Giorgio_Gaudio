<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublicController extends Controller
{
    public function homepage () {

    $title='Tennista';
    return view('welcome',['titolo'=>$title]);//passaggi di dati alla vista

    //chiave dell'array- NOME DELLA VARIABILE SULLA VISTA
    //valore - il dato in sè

}

 public function chiSiamo () {

$arraytennisti=[

['name'=>'Jannik','surname'=>'Sinner' ,'gender'=>'M'],
['name'=>'Lorenzo','surname'=>'Musetti','gender'=>'M'],
['name'=>'Flavio','surname'=>'Cobolli','gender'=>'M'],
['name'=>'Luciano','surname'=>'Darderi','gender'=>'M'],


];

    return view('Chi-siamo', ['players'=>$arraytennisti]);

}




}
