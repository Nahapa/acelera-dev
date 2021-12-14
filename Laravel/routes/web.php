<?php

use App\Http\Controllers\AssinaturaController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\PerfilController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'exercicios')->name('exercicios');

Route::get('perfil', [PerfilController::class, 'perfil'])->name('perfil');

Route::get('documentos', [DocumentoController::class, 'listagemdoc'])->name('listagemdoc');
Route::post('documentos', [DocumentoController::class, 'inseredoc'])->name('inseredoc');
Route::get('documentos/novo', [DocumentoController::class, 'novodoc'])->name('novodoc');
Route::delete('documentos/remover/{id}', [DocumentoController::class, 'removedoc'])->name('removedoc');
Route::get('documentos/{id}', [DocumentoController::class, 'exibedoc'])->name('exibedoc');

Route::get('assinaturas', [AssinaturaController::class, 'listagemass'])->name('listagemass');
Route::post('assinaturas', [AssinaturaController::class, 'insereass'])->name('insereass');
Route::get('assinaturas/novo', [AssinaturaController::class, 'novoass'])->name('novoass');
Route::delete('assinaturas/remover/{id}', [AssinaturaController::class, 'removeass'])->name('removeass');
Route::get('assinaturas/{id}', [AssinaturaController::class, 'exibeass'])->name('exibeass');
