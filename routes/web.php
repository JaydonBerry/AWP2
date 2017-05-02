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
    return view('auth/login');
});

Auth::routes();

Route::GET('/home', 'jobController@all')->name('home');
Route::GET('/job/new', 'jobController@create')->name('newJob');
Route::POST('/job/create', 'jobController@store')->name('JobStore');
Route::POST('/job/search', 'jobController@search')->name('JobSearch');
Route::GET('/job/{id}', 'jobController@selectJob')->name('selectJob');
Route::GET('/job/{id}/edit', 'jobController@edit')->name('editJob');
Route::PATCH('/job/{id}/edit', 'jobController@update')->name('jobUpdate');
Route::GET('/job/{id}/delete', 'jobController@delete')->name('jobDelete');