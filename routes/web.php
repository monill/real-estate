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

Route::namespace('Site')->group(function () {
    Route::get('/', 'IndexController@index');

    Route::get('propriedades', 'PropertiesController@index');

    Route::get('corretores', 'AgentsController@index');

    Route::get('galeria', 'GalleriesController@index');

    Route::get('blog', 'BlogsController@index');

    Route::get('contato', 'ContactController@index');
    Route::post('contato', 'ContactController@store');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
