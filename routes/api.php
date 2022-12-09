<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AsignaturaApiController;


Route::group(['prefix' => 'asignatura'], function(){
    Route::get('/all', [AsignaturaApiController::class, 'all']);
    Route::post('/store', [AsignaturaApiController::class, 'store']);
    Route::get('{id}/edit', [AsignaturaApiController::class, 'edit']);
    Route::put('{id}/update', [AsignaturaApiController::class, 'update']);
    Route::delete('{id}/destroy', [AsignaturaApiController::class, 'destroy']);
});
