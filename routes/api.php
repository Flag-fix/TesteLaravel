<?php

use App\Http\Controllers\api\CidadeController;
use App\Http\Controllers\api\EnderecoController;
use App\Http\Controllers\api\EstadoController;
use App\Http\Controllers\api\UsuarioController;
use Illuminate\Support\Facades\Route;


Route::apiResource('usuarios',UsuarioController::class);
Route::apiResource('enderecos', EnderecoController::class);
Route::apiResource('cidades', CidadeController::class);
Route::apiResource('estados', EstadoController::class);
