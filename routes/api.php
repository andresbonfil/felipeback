<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CotizacioneController;
use App\Http\Controllers\DetalleController;

Route::middleware('auth:api')->get('/user', function (Request $request) { return $request->user(); });

Route::apiResource("usuario", UsuarioController::class);
Route::post('usuario/recontra', [UsuarioController::class, 'recontra'])->name('usuario.recontra');
Route::post('usuario/login', [UsuarioController::class, 'login'])->name('usuario.login');
//Route::get('usuairo/{id}', [UsuarioController::class,'show'])->name('usuario.show');
//Route::put('usuario/{id}', [UsuarioController::class, 'update'])->name('usuario.update');
//Route::delete('usuairo/{id}', [UsuarioController::class, 'destroy'])->name('usuario.delete');

Route::apiResource("producto", ProductoController::class);
Route::get('productoprovedor', [ProductoController::class, 'productoprovedor'])->name('productoprovedor');//Route::get('venderproductos/{id}', [ProductoController::class, 'venderproductos'])->name('venderproductos');
Route::get('vendedor', [UsuarioController::class, 'vendedor'])->name('vendedor');

Route::apiResource("cotizacion", CotizacioneController::class);
Route::get('cotizacion2/{id}', [CotizacioneController::class, 'show2'])->name('cotizacion');


Route::apiResource("detalle", DetalleController::class);