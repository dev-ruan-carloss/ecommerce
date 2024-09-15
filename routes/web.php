<?php

use App\Http\Controllers\CadastroController;
use App\Http\Controllers\InicioController;
use Illuminate\Support\Facades\Route;

Route::get('/', [InicioController::class, 'index'])->name('inicio');

Route::prefix('cadastro')->group(function() {
    Route::get('/', [CadastroController::class, 'index'])->name('cadastro');
    Route::get('gravar', [CadastroController::class, 'gravar'])->name('cadastro.gravar');
});

Route::prefix('login')->group(function() {
    // Route::get('/', [LoginController::class, 'index'])->name('login.get');
    // Route::post('entrar', [LoginController::class, 'entrar'])->name('login.entrar');
    // Route::get('sair', 'LoginController@sair')->name('login.sair');
});
