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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// CRUD API

Route::get('exams', 'API\ExamsController@index');
Route::get('exams/{exams}/detail', 'API\ExamsController@show');
Route::delete('exams/{exams}', 'API\ExamsController@destroy');
Route::post('exams', 'API\ExamsController@store');
Route::patch('exams/{exams}', 'API\ExamsController@update');

// END CRUD API

// Auth

Route::group([

    'middleware' => 'api',
    'prefix' => 'auth'

], function ($router) {

    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');

});

// End Auth

// Make Password

Route::get('password', function(){
    return bcrypt('puja123');
});

// End Make Password

