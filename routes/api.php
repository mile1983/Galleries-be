<?php

use Illuminate\Http\Request;
use App\Http\Controllers\GallariesController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
Route::post('/login', 'Auth\LoginController@authenticate');
Route::post('/register', 'Auth\RegisterController@create');
Route::get('/galleries', 'GallariesController@index');
Route::middleware('jwt')->get('/all-galleries', 'GalleryController@index');
Route::middleware('jwt')->get('/galleries/{id}','GalleryController@show');
