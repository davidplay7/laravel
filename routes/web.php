<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $nome = "David";
    $ar = ["David",18,34234,"viva"];
    $contatos = ["ana","maria","jose","vitu"];
    return view('welcome', [
        'nome' => $nome,
        'arr' => $ar,
        'contatos' => $contatos
    ]);
});

Route::get('/sobre', function () {
    return view('sobre', [
        
    ]);
});
