<?php

// Pages
Route::get('/','PageController@index')->name('home');
Route::get('about','PageController@about')->name('about');
Route::get('cv','CVController@index')->name('cv');
Route::get('contact','PageController@contact')->name('contact');
Route::get('projects','ProjectController@index')->name('project.index');

Route::group(['middleware'=>'auth'],function(){
  Route::resource('project','ProjectController',['except'=>'index']);
  Route::resource('education','EduController');
  Route::resource('skills','SkillController',['except'=>['edit','update','show']]);

  // Work Routes
  Route::get('work/create','CVController@createJob')->name('work.create');
  Route::post('work/store','CVController@storeJob')->name('work.store');
  Route::get('work/edit/{id}','CVController@editJob')->name('work.edit');
  Route::post('work/update/{id}','CVController@updateJob')->name('work.update');
  Route::post('work/{id}/delete','CVController@deleteJob')->name('work.delete');

  // Basic info routes
  Route::get('basic/create','CVController@createInfo')->name('info.create');
  Route::post('basic/store','CVController@storeInfo')->name('info.store');
  Route::get('basic/edit/{id}','CVController@editInfo')->name('info.edit');
  Route::post('basic/update/{id}','CVController@updateInfo')->name('info.update');
});

// Auth Routes
Auth::routes();
Route::get('logout','Auth\LoginController@logout')->name('logout');
