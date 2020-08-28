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
Route::get('/lupain','LupaController@lupain');
Route::get('/registeran','RegisterController@registeran');
Route::post('/admin/inserty','tambah@create');
Route::post('/admin/guys','tambah@store');
Route::get('/admin/yoyo','tambah@index');
Route::post('/admin/masuk','LoginController@postlogin');
Route::get('/form','FormController@form');
Route::post('form/kecamm2', 'FormController@kecamm2')->name('FormController.kecamm2');
Route::post('form/desass2', 'FormController@desass2')->name('FormController.desass2');
Route::get('/dataKK','tablekkmiskin@dataKK');
Route::get('/daftaradmin','daftaradmin@daftaradmin');
Route::get('/dataadmin','daftaradmin@dataadmin');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/formKK', 'DynamicDependent@index');