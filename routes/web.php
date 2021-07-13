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

Route::get('/', 'ExamsController@home');
Route::get('/exams', 'ExamsController@index');
Route::get('/detail', 'ExamsController@index2');

// CRUD

Route::get('/detail/create', 'ExamsController@create');
Route::get('/detail/{exams}', 'ExamsController@show');
Route::post('/detail', 'ExamsController@store');
Route::delete('/detail/{exams}', 'ExamsController@destroy');
Route::get('/detail/{exams}/edit', 'ExamsController@edit');
Route::patch('/detail/{exams}', 'ExamsController@update');

// END CRUD

// CRUD KATEGORI

Route::get('/kategoris', 'KategoriController@index');
Route::get('/detail/create', 'KategoriController@create');
Route::post('/kategoris', 'KategoriController@store');
Route::delete('/kategoris/{kategori}', 'KategoriController@destroy');
Route::get('/detail/{kategori}/update', 'KategoriController@edit');
Route::patch('/update/{kategori}', 'KategoriController@update');


// END CRUD KATEGORI