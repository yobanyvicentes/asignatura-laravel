<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsignaturaController;

Route::get('/', function () {
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('/asignaturas', AsignaturaController::class);
