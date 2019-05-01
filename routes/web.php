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
    //Pesquisar
    Route::post('pesquisar', 'PropertiesController@pesquisar');
    //Newsletter
    Route::post('newsletter', 'IndexController@store');
    //Sobre
    Route::get('sobre', 'AboutController@index')->name('sobre');
    //Propriedades
    Route::get('propriedades', 'PropertiesController@index')->name('propriedades');
    Route::get('propriedade/{id}.{slug}', 'PropertiesController@show')->name('propriedade');
    Route::post('question', 'PropertiesController@store');
    //Corretores
    Route::get('corretores', 'AgentsController@index')->name('corretores');
    //Galeria
    Route::get('galeria', 'GalleriesController@index')->name('galeria');
    //Blog
    Route::get('blog', 'BlogsController@index')->name('blog');
    Route::get('blog/{id}.{slug}', 'BlogsController@show')->name('blog.view');
    Route::post('comment', 'BlogsController@store');
    //Contato
    Route::get('contato', 'ContactController@index')->name('contato');
    Route::post('contato', 'ContactController@store');
});

Route::namespace('Admin')->group(function () {
    //Dashboard
    Route::get('dashboard', 'IndexController@index')->name('dashboard');
    //Blog
    Route::resource('blogs', 'BlogsController');
    Route::put('blog-publish/{id}', 'BlogsController@publishOnOff');
    //Blog Comentarios
    Route::resource('comments', 'BlogCommentsController')->only(['index', 'update', 'destroy']);
    //Categorias
    Route::resource('categories', 'CategoriesController')->except(['create', 'show', 'edit']);
    //Configurações
    Route::resource('settings', 'SettingsController')->only(['index', 'update']);
    //Destaques
    Route::resource('features', 'FeaturesController')->except(['create', 'show', 'edit']);
    //Logs
    Route::resource('logs', 'LogsController')->only(['index', 'destroy']);
    //Messages
    Route::resource('messages', 'MessagesController')->only(['index', 'show', 'destroy']);
    //Newsletters
    Route::resource('newsletters', 'NewslettersController')->only(['index', 'destroy']);
    //Propriedades
    Route::resource('properties', 'PropertiesController');
    Route::post('search', 'PropertiesController@search');
    Route::get('properties/{id}/images', 'PropertiesController@images')->name('images');
    Route::post('upload', 'PropertiesController@uploadImage');
    Route::post('upload/delete/{id}', 'PropertiesController@deleteImage');
    Route::put('main-image/{id}', 'PropertiesController@mainImage');
    Route::put('feature/{id}', 'PropertiesController@feature');
    Route::put('slider/{id}', 'PropertiesController@slider');
    //Duvidas
    Route::resource('questions', 'QuestionsController')->only(['index', 'show', 'destroy']);
    //Servicos
    Route::resource('services', 'ServicesController')->except(['show']);
    //Tags
    Route::resource('tags', 'TagsController')->except(['create', 'show', 'edit']);
    //Corretores
    Route::resource('users', 'UsersController')->except(['show']);
    //Visitantes
    Route::get('visitors', 'VisitorsController@index')->name('visitors');
    //Limpar cache
    Route::get('cleancache', 'IndexController@cleanCache')->name('cleancache');
});
