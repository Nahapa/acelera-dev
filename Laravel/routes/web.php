<?php

use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\PerfilController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'exercicios');

Route::get('perfil', [PerfilController::class, 'perfil'])->name('perfil');
Route::get('documentos', [DocumentoController::class, 'documentos'])->name('documentos');
