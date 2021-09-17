<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;
use App\Http\Controllers\ProductoController;
use App\Http\Controllers\CotizacioneController;
use App\Http\Controllers\DetalleController;

Route::middleware('auth:api')->get('/user', function (Request $request) { return $request->user(); });

Route::apiResource("usuario", UsuarioController::class);
Route::post('usuariorecontra', [UsuarioController::class, 'recontra'])->name('usuariorecontra');
Route::post('usuariologin', [UsuarioController::class, 'login'])->name('usuariologin');
Route::get('usuariovendedor', [UsuarioController::class, 'vendedores'])->name('usuariovendedor');
        //Route::get('usuairo/{id}', [UsuarioController::class,'show'])->name('usuario.show');
        //Route::put('usuario/{id}', [UsuarioController::class, 'update'])->name('usuario.update');
        //Route::delete('usuairo/{id}', [UsuarioController::class, 'destroy'])->name('usuario.delete');
Route::apiResource("producto", ProductoController::class);
Route::get('productoprovedor', [ProductoController::class, 'productoprovedor'])->name('productoprovedor');//Route::get('venderproductos/{id}', [ProductoController::class, 'venderproductos'])->name('venderproductos');
Route::delete('producto/{id}', [ProductoController::class, 'destroy'])->name('producto.delete');
Route::put('producto', [ProductoController::class, 'update'])->name('porducto.update');

Route::apiResource("cotizacion", CotizacioneController::class);
Route::get('cotizacion2/{id}', [CotizacioneController::class, 'show2'])->name('cotizacion');
Route::get('cotizacion3/{id}', [CotizacioneController::class, 'show3'])->name('cotizacion3');
Route::delete('cotizacion/{id}', [CotizacioneController::class, 'destroy'])->name('cotizacion.delete');

Route::apiResource("detalle", DetalleController::class);
Route::delete('detalle/{id}', [DetalleController::class, 'destroy'])->name('detalle.delete');