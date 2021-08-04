<?php

use App\Http\Controllers\TipoController;
use App\Http\Controllers\SituacaoController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::prefix('tipos')->group( function(){
  Route::get('/', [TipoController::class,'index']);
  Route::get('/{id}', [TipoController::class,'show']);
  Route::post('/', [TipoController::class,'store']);
  Route::put('/{id}', [TipoController::class,'update']);
  Route::delete('/{id}', [TipoController::class,'destroy']);
});

Route::prefix('situacao')->group( function(){
    Route::get('/', [SituacaoController::class,'index']);
    Route::get('/{id}', [SituacaoController::class,'show']);
    Route::post('/', [SituacaoController::class,'create']);
    Route::put('/{id}', [SituacaoController::class,'update']);
    Route::delete('/{id}', [SituacaoController::class,'update']);
});