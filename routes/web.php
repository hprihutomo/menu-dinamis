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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// Route::get('menu', 'MenuController@index')->name('menu.index');
Route::get('hasil', 'MenuController@hasil')->name('menu.hasil');
Route::get('menu', 'TarifController@index')->name('menu.hasil');
