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

/*Route::get('/', function () {
    return view('welcome');
});*/

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/', 'StudentController@index')->name('student');
Route::get('/create','StudentController@create')->name('create');
Route::post('/store', 'StudentController@store')->name('store');
Route::get('/view/{id}', 'StudentController@show')->name('view');
Route::get('/update/{id}', 'StudentController@edit')->name('update');
Route::post('/update/save/{id}', 'StudentController@update')->name('save');
Route::get('/delete/{id}', 'StudentController@destroy')->name('delete');

