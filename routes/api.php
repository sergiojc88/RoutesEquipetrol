<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/Drive', 'App\Http\Controllers\DriverController@index'); // Mostrar Datos
Route::post('/Drive', 'App\Http\Controllers\DriverController@store'); //
Route::put('/Drive/{id}', 'App\Http\Controllers\DriverController@update'); //
Route::delete('/Drive/{id}', 'App\Http\Controllers\DriverController@destroy'); //
