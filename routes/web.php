<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;

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

Route::get('/hola', function () {
    return 'Hello World';
});
Route::get('/inicio', function () {
    return view('inicio', ['name' => 'jorge']);
});

Route::get('productos', 'App\Http\Controllers\ProductoController@index0');
Route::get('/inicio/{id}', [ProductoController::class, 'show']);