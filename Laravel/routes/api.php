<?php

use App\Http\Controllers\Api\AnaliseControllerApi;
use App\Http\Controllers\Api\AssinaturaControllerApi;
use App\Http\Controllers\Api\DocumentoControllerApi;
use App\Http\Controllers\Api\LoginControllerApi;
use App\Http\Controllers\Api\RelatorioDeAnaliseControllerApi;
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
                Route::apiResource('/documentos', DocumentoControllerApi::class);
                Route::apiResource('/assinaturas', AssinaturaControllerApi::class);
                Route::apiResource('/analises', AnaliseControllerApi::class);
                Route::apiResource('/relatorios', RelatorioDeAnaliseControllerApi::class)->only('index');
            }
        );
    }
);
