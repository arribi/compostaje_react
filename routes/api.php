<?php

use App\Http\Controllers\Api\CentroController;
use App\Http\Controllers\Api\CentroUsersController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

// Por defecto Orion protege todos los endpoints a no ser que tengamos una política
Route::group(['as' => 'api.'], function () {
    // Orion::resource('centros', CentroController::class)->names([
    //     'index'   => 'centros'
    // ]);
    Orion::resource('centros', CentroController::class);
    Orion::hasManyResource('centros', 'users', CentroUsersController::class);
});
