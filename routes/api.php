<?php

use Illuminate\Http\Request;

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

Route::group(['prefix' => 'v1'], function() {

    Route::post('login', 'Api\PasportController@login');

    // route use middleware from pasport auth
    Route::group(['middleware' => 'auth:api'], function() {
        // complent issue 
        Route::get('complents', 'Api\ComplentController@index');
        Route::get('complent/{id}', 'Api\ComplentController@show');
        Route::get('complent/user/{id}', 'Api\ComplentController@showByUser');
        Route::post('complent', 'Api\ComplentController@create');
        Route::put('complent/finish', 'Api\ComplentController@store');

    });
    

});
