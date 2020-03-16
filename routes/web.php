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
    return view('index');
});

Route::get('/dashboard','AdminController@dashboard');
Route::get('/loginin','LoginController@loginin');
Route::get('/registeran','RegisterController@registeran');
Route::post('/admin/inserty','tambah@create');
Route::post('/admin/masuk','LoginController@postlogin');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
