<?php

use App\Http\Controllers\AssinaturaController;
use App\Http\Controllers\AutenticacaoController;
use App\Http\Controllers\DocumentoController;
use App\Http\Controllers\PerfilController;
use Illuminate\Support\Facades\Route;

Route::view('/', 'exercicios')->name('exercicios');

Route::get('perfil', [PerfilController::class, 'perfil'])->name('perfil');

Route::get('documentos', [DocumentoController::class, 'listagemdoc'])->name('listagemdoc');
Route::post('documentos', [DocumentoController::class, 'inseredoc'])->name('inseredoc');
Route::get('documentos/novo', [DocumentoController::class, 'novodoc'])->name('novodoc')->middleware('validapermissao');
Route::delete('documentos/remover/{id}', [DocumentoController::class, 'removedoc'])->name('removedoc')->middleware('validapermissao');
Route::get('documentos/{id}', [DocumentoController::class, 'exibedoc'])->name('exibedoc')->middleware('validapermissao');

Route::get('assinaturas', [AssinaturaController::class, 'listagemass'])->name('listagemass');
Route::post('assinaturas', [AssinaturaController::class, 'insereass'])->name('insereass');
Route::get('assinaturas/novo', [AssinaturaController::class, 'novoass'])->name('novoass')->middleware('validapermissao');
Route::delete('assinaturas/remover/{id}', [AssinaturaController::class, 'removeass'])->name('removeass')->middleware('validapermissao');
Route::get('assinaturas/{id}', [AssinaturaController::class, 'exibeass'])->name('exibeass')->middleware('validapermissao');

Route::get('login', [AutenticacaoController::class, 'login'])->name('login');
Route::get('logout', [AutenticacaoController::class, 'logout'])->name('logout');
