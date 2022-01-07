<?php

use App\Http\Controllers\Api\DocumentoControllerApi;
use App\Http\Controllers\Api\LoginControllerApi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::group(
    [
        'as' => 'api.'
    ],
    function () {
        Route::post('/login', [LoginControllerApi::class, 'login'])->name('login');
        Route::get('/logout', [LoginControllerApi::class, 'logout'])->name('logout');
        Route::get('/refresh', [LoginControllerApi::class, 'refresh'])->name('refresh');

        Route::middleware('jwt.auth')->group(
            function () {
                Route::get('documentos', [DocumentoControllerApi::class, 'listagemdoc']);
                Route::get('documentos/{id}', [DocumentoControllerApi::class, 'exibedoc']);
            }
        );
    }
);
