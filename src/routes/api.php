<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ExemploController;
use App\Http\Controllers\PlayerController;




Route::get('/',[PlayerController::class ,'listar']);
Route::post('/',[PlayerController::class ,'salvarMusica']);
Route::get('/{id}',[PlayerController::class ,'buscar']);
Route::put('/{id}',[PlayerController::class ,'atualizar']);
Route::delete('/{id}',[PlayerController::class ,'deletar']);




