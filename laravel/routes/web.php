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

Route::get('/peripherals', 'PeripheralController@index')
    -> name('peripheral-index');
Route::get('/peripheral/{id}', 'PeripheralController@show')
    -> name('peripheral-show');
    Route::get('/new/peripheral', 'PeripheralController@create')
        -> name('peripheral-create');
    Route::post('/new/peripheral/store', 'PeripheralController@store')
        -> name('peripheral-store');
