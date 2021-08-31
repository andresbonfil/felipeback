<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () { return view('bonfil'); })->name('home');
Route::get('email', [UsuarioController::class, 'emailtest'])->name('emailtest');
Route::get('emailRecovery', function () { return view('emailRecovery'); })->name('emailRecovery');
Route::post('emailRecovery', [UsuarioController::class, 'emailRecoveryPost'])->name('emailRecoveryPost');
