<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Centro_de_servicoController;

Route::get('/',[Centro_de_servicoController::class,'index']);
Route::get('/sobre',[Centro_de_servicoController::class,'sobre']);
Route::get('/carrinho',[Centro_de_servicoController::class,'carrinho']);
Route::get('/voucher',[Centro_de_servicoController::class,'voucher']);
Route::get('/detalhes/{id}',[Centro_de_servicoController::class,'detalhes']);
Route::get('/dashboard',[Centro_de_servicoController::class,'dashboard'])->middleware('auth');
