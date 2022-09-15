<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', 'App\Http\Controllers\RuasController@index')->name('home');

Route::get('home', 'App\Http\Controllers\RuasController@index')->name('home');
Route::post('add-ruas', 'App\Http\Controllers\RuasController@addRuas')->name('add-ruas');
Route::get('getData', 'App\Http\Controllers\RuasController@getData')->name('ruas');
Route::get('get-ruas/{id}', 'App\Http\Controllers\RuasController@getSingleRuas')->name('get.ruas');

Route::get('get-edit/{id}', 'App\Http\Controllers\RuasController@getEditRuas')->name('get.edit');
Route::post('update-ruas/{id}', 'App\Http\Controllers\RuasController@editRuas')->name('edit.ruas');

Route::get('delete/{id}', 'App\Http\Controllers\RuasController@deleteRuas')->name('delete.ruas');


