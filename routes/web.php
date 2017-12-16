<?php

Route::get('/','PageController@index')->name('home');
Route::get('about','PageController@about')->name('about');

// Auth Routes
Auth::routes();
