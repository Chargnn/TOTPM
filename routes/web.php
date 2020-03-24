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

Route::get('/', 'HomeController@index')->name('home')->middleware('auth');
Route::get('/logout', 'HomeController@logout')->name('logout')->middleware('auth');

// codes
Route::post('/code/store', 'CodeController@store')->name('code.store')->middleware('auth');
Route::post('/code/destroy', 'CodeController@destroy')->name('code.destroy')->middleware('auth');


Auth::routes();
