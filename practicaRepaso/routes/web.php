<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Portada');
});

Route::get('/Repaso', function () {
    return view('Repaso1');
});

use App\Http\Controllers\ConvertidorController;


Route::post('/convertir', [ConvertidorController::class, 'convertir']);

