<?php

use App\Http\Controllers\CochesController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/coches', [CochesController::class, 'index'])->name('coches');

Route::get('/coches/{id}', [CochesController:: class, 'show'])->name('mostrarcoche');

Route::get('/crearcoche', [CochesController:: class, 'create'])->name('crearcoche');

Route::post('/coches', [CochesController:: class, 'store'])->name('guardarcoche');