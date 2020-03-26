<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/kontak', 'HomeController@indexKontak')->name('kontak');
Route::get('/berita', 'HomeController@indexBerita')->name('berita');
Route::get('/portopolio', 'HomeController@indexPortopolio')->name('portopolio');
Route::get('/team', 'HomeController@indexTeam')->name('team');
Route::get('/categori', 'HomeController@indexCategori')->name('categori');

Route::resource('post', 'PostController');

Route::resource('category', 'CategoryController');

Route::resource('test', 'TesController');