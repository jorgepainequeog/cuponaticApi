<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ProductoController;
use App\Http\Resources\ProductosResource;
use App\Models\Producto;
use App\Http\Resources\ProductoCollection;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('list',[ProductoController::class, 'index' ]);

Route::get('products', function () {
    return response(['Product 1', 'Product 2', 'Product 3'],200);
});

Route::get('list/{order}',[ProductoController::class, 'listarPorOrden' ]);

Route::get('/productos', function () {
    return new ProductoCollection(Producto::all());
});
Route::get('/producto/{id}', function ($id) {
    return new ProductosResource(Producto::findOrFail($id));
});