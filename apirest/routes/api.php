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

Route::get('categoria','App\Http\Controllers\CategoryController@getCategory');
Route::get('categoria/{id}','App\Http\Controllers\CategoryController@getCategoryId');
Route::post('agregarCategoria','App\Http\Controllers\CategoryController@insertCategory');
Route::delate('eliminarCategoria','App\Http\Controllers\CategoryController@insertCategory');