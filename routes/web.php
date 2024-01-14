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
use App\Http\Controllers\eventos;
Route::get('/', [eventos::class, 'index']);

Route::get('/sobre', function () {
    return view('sobre', [
        
    ]);
});


// routes/web.php

use App\Http\Controllers\ProductController;

Route::resource('products', ProductController::class);
