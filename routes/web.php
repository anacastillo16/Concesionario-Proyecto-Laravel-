<?php

use App\Http\Controllers\CochesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('coches', CochesController::class);

