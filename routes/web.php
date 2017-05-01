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
    return view('layouts/app');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/job/new', 'jobController@create')->name('newJob');
Route::POST('/job/create', 'jobController@store')->name('JobStore');





Route::get('/job/{id}', 'jobController@selectJob')->name('selectJob');