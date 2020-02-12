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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/contacts', 'ContactController');

Route::get('/contacts', 'ContactController@index')->name('contacts.index');

Route::get('/create', function () { return view('contacts\create'); });

Route::post('/create', 'ContactController@create')->name('contacts.create');

Route::get('/edit', function () { return view('contacts\edit'); });

Route::post('/edit', 'ContactController@edit')->name('contacts.edit');


Route::put('', function() {});

Route::patch('', function() {});

Route::delete('', function() {});

Route::options('', function() {});

// Route::method('', function() {});
