<?php

use App\Http\Controllers\AssinaturaController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\PerfilController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'exercicios')->name('exercicios');

Route::get('perfil', [PerfilController::class, 'perfil'])->name('perfil');

Route::get('documentos', [DocumentoController::class, 'listagem'])->name('listagemdoc');
Route::get('documentos/{id}', [DocumentoController::class, 'exibedoc'])->name('exibedoc');

Route::get('assinaturas', [AssinaturaController::class, 'listagemass'])->name('listagemass');
Route::get('assinaturas/{id}', [AssinaturaController::class, 'exibeass'])->name('exibeass');
