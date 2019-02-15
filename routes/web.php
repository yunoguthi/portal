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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/orgao', 'OrgaoController@index')->name('orgao');
Route::post('/orgao', 'OrgaoController@store')->name('orgao');
Route::put('/orgao', 'OrgaoController@update')->name('orgao');
Route::delete('/orgao', 'OrgaoController@delete')->name('orgao');
