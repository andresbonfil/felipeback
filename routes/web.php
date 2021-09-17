<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', function () { return view('bonfil'); })->name('home');
Route::get('emailrecovery', function () { return view('emailRecovery'); })->name('emailRecovery');
Route::post('emailrecovery', [UsuarioController::class, 'emailRecoveryPost'])->name('emailRecoveryPost');

Route::get('emailtest', [UsuarioController::class, 'emailtest'])->name('emailtest');