<?php

use App\Http\Controllers\Api\CentroController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use Orion\Facades\Orion;

Route::get('/user', function (Request $request) {
    dd("hola");
    return $request->user();
})->middleware('auth:sanctum');

// Por defecto Orion protege todos los endpoints a no ser que tengamos una política
Route::group(['as' => 'api.'], function () {
    Orion::resource('centros', CentroController::class);
});
