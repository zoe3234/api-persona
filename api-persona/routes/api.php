<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;


Route::get('/personas', [PersonaController::class, 'listar']);
Route::post('/personas', [PersonaController::class, 'alta']);
Route::put('/personas/{id}', [PersonaController::class, 'modificar']);
Route::delete('/personas/{id}', [PersonaController::class, 'baja']);
Route::get('/personas/{id}', [PersonaController::class, 'buscar']);
