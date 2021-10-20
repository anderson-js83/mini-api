<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::resource('/', '\App\Http\Controllers\CarroController');
Route::prefix('/')->group(function(){
    
	#GET
		Route::get('lst/carros', ['uses' => '\App\Http\Controllers\CarroController@showAll']);
		Route::get('lst/carro/{id}', ['uses' => '\App\Http\Controllers\CarroController@show']);

	#POST
		Route::post('add/carro', ['uses' => '\App\Http\Controllers\CarroController@store']);
		Route::post('alt/carro/{id}', ['uses' => '\App\Http\Controllers\CarroController@update']);

	#DELETE
		Route::delete('rmv/carro/{id}', ['uses' => '\App\Http\Controllers\CarroController@destroy']);

});
