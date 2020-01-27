<?php

use Illuminate\Http\Request;
use App\Http\Controllers\TheaterControler;
use App\Http\Controllers\RuanganControler;
use App\Http\Controllers\MovieControler;
use App\Http\Controllers\JadwalControler;
Use App\Theater;

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
// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

//theater
Route::get('Theater', 'TheaterControler@index');
Route::post('Theater', 'TheaterControler@store');
Route::put('Theater/{id}', 'TheaterControler@update');
Route::delete('Theater/{id}', 'TheaterControler@delete');

//ruangan
Route::get('ruangan', 'RuanganControler@index');
Route::post('ruangan', 'RuanganControler@store');
Route::put('ruangan/{id}', 'RuanganControler@update');
Route::delete('ruangan/{id}', 'RuanganControler@delete');

//movie
Route::get('movie', 'MovieControler@index');
Route::post('movie', 'MovieControler@store');
Route::put('movie/{id}', 'MovieControler@update');
Route::delete('movie/{id}', 'MovieControler@delete');

//jadwal
Route::get('jadwal', 'JadwalControler@index');
Route::post('jadwal', 'JadwalControler@store');
Route::put('jadwal/{$theater_id}', 'JadwalControler@update');
Route::delete('jadwal/{$theater_id}', 'JadwalControler@delete');

//API
// Route::post('login', 'API\UserController@login');
// Route::post('register', 'API\UserController@register');
//
// Route::group(['middleware' => 'auth:api'], function(){
//     Route::post('details', 'API\UserController@details');
// });

Route::middleware('auth:api')->get('user', 'UserController@AuthRouteAPI');
