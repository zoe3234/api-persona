<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PersonaController;



Route::get('/personas', [PersonaController::class, 'listar']);

Route::post('/persona', function () {
    return 'crear persona';
});

Route::put('/persona/{id}', function () {
    return 'modificar persona';
});

Route::delete('/persona/{id}', function () {
    return 'eliminar persona';
});

Route::get('/persona/{id}', function () {
    return 'obtener persona por id';
});