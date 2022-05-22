<?php

use Illuminate\Support\Facades\Route;
use App\Models\User;
use App\Models\Articulos;
use App\Models\Ofertas;
use App\Models\Categorias;
use App\Models\Publicidad;
use App\Models\Redes_sociales;
use App\Models\Ventas;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function () {
    return view('welcome');
});

Route::get('/User', function () {
    return User::All();
});
Route::get('/Articulos', function () {
    return Articulos::All();
});

Route::get('/Categorias', function () {
    return Categorias::All();
});
Route::get('/Ofertas', function () {
    return Ofertas::All();
});
Route::get('/Publicidad', function () {
    return Publicidad::All();
});
Route::get('/Redes_sociales', function () {
    return Redes_sociales::All();
});
Route::get('/Ventas', function () {
    return Ventas::All();
});






Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
