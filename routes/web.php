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

//Index
Route::middleware('visitors')->group(function () {
    Route::namespace('Site')->group(function () {
        Route::get('/', 'IndexController@index')->name('index');
    });
});

Auth::routes();

Route::namespace('Site')->group(function () {
    //Propriedades
    Route::get('propriedades', 'PropertiesController@index');
    //Corretores
    Route::get('corretores', 'AgentsController@index');
    //Galeria
    Route::get('galeria', 'GalleriesController@index');
    //Blog
    Route::get('blog', 'BlogsController@index');
    //Contato
    Route::get('contato', 'ContactController@index');
    Route::post('contato', 'ContactController@store');
});

Route::namespace('Admin')->group(function () {
    //Dashboard
    Route::get('dashboard', 'IndexController@index');
    //Blog
    Route::resource('blogs', 'BlogsController');
    //Blog Comentarios
    Route::get('comments', 'BlogCommentsController@index');
    Route::put('comments/{id}', 'BlogCommentsController@approveDisapprove');
    Route::delete('comments/{id}', 'BlogCommentsController@destroy');
    //Categorias
    Route::resource('categories', 'CategoriesController')->except(['create', 'show', 'edit']);
    //Configurações
    Route::get('settings', 'SettingsController@index');
    Route::post('settings', 'SettingsController@update');
    //Destaques
    Route::resource('features', 'FeaturesController')->except(['create', 'show', 'edit']);
    //Messages
    Route::resource('messages', 'MessagesController')->only(['index', 'show', 'destroy']);
    //Newsletters
    Route::get('newsletters', 'NewslettersController@index');
    Route::delete('newsletters/{id}', 'NewslettersController@destroy');
    //Propriedades
    Route::resource('properties', 'PropertiesController');
    //Duvidas
    Route::get('questions', 'QuestionsController@index');
    //Tags
    Route::resource('tags', 'TagsController')->except(['create', 'show', 'edit']);
    //Corretores
    Route::resource('users', 'UsersController');
    //Visitantes
    Route::get('visitors', 'VisitorsController@index');
});
