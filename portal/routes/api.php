<?php

use App\Http\Controllers\TipoController;
use App\Http\Controllers\SituacaoController;
use App\Http\Controllers\DisciplinaController;
use App\Http\Controllers\EventoController;
use App\Http\Controllers\PeriodOperationController;
use App\Http\Controllers\PessoaController;
use App\Http\Controllers\ArquivosController;
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
    Route::post('/', [SituacaoController::class,'store']);
    Route::put('/{id}', [SituacaoController::class,'update']);
    Route::delete('/{id}', [SituacaoController::class,'update']);
});

Route::prefix('disciplinas')->group( function(){
  Route::get('/', [DisciplinaController::class,'index']);
  Route::get('/{id}', [DisciplinaController::class,'show']);
  Route::post('/', [DisciplinaController::class,'store']);
  Route::put('/{id}', [DisciplinaController::class,'update']);
  Route::delete('/{id}', [DisciplinaController::class,'update']);
});

Route::prefix('eventos')->group( function(){
  Route::get('/', [EventoController::class,'index']);
  Route::get('/{id}', [EventoController::class,'show']);
  Route::post('/', [EventoController::class,'store']);
  Route::put('/{id}', [EventoController::class,'update']);
  Route::delete('/{id}', [EventoController::class,'update']);
});

Route::prefix('periodo-operacional')->group( function(){
  Route::get('/', [PeriodOperationController::class,'index']);
  Route::get('/{id}', [PeriodOperationController::class,'show']);
  Route::post('/', [PeriodOperationController::class,'store']);
  Route::put('/{id}', [PeriodOperationController::class,'update']);
  Route::delete('/{id}', [PeriodOperationController::class,'update']);
});

Route::prefix('pessoas')->group( function(){
  Route::get('/', [PessoaController::class,'index']);
  Route::get('/{id}', [PessoaController::class,'show']);
  Route::post('/', [PessoaController::class,'store']);
  Route::put('/{id}', [PessoaController::class,'update']);
  Route::delete('/{id}', [PessoaController::class,'update']);
});

Route::prefix('arquivos')->group( function(){
  Route::get('/', [ArquivosController::class,'index']);
  Route::get('/{id}', [ArquivosController::class,'show']);
  Route::post('/', [ArquivosController::class,'store']);
  Route::put('/{id}', [ArquivosController::class,'update']);
  Route::delete('/{id}', [ArquivosController::class,'update']);
});