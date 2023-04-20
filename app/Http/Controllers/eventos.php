<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class eventos extends Controller
{
    public function index(){
        $nome = "David";
        $ar = ["David",18,34234,"viva"];
        $contatos = ["ana","maria","jose","vitu"];
        return view('welcome', [
        'nome' => $nome,
        'arr' => $ar,
        'contatos' => $contatos
    ]);
    }
}
