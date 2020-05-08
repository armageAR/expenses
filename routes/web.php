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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/dash/', 'DashboardController@index')->name('dash');

Route::get('/file-upload/', 'FileController@upload')->name('file.upload');
Route::post('/file-upload/', 'FileController@store')->name('file.store');

