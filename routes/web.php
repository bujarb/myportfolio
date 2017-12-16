<?php

Route::get('/','PageController@index')->name('home');
Route::get('about','PageController@about')->name('about');
Route::get('cv','CVController@index')->name('cv');
Route::get('contact','PageController@contact')->name('contact');

// Auth Routes
Auth::routes();
