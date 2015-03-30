<?php

Route::get('/', 'PagesController@home');
Route::get('about', 'PagesController@about');
Route::get('activity', 'PagesController@activity');
Route::get('contact', 'PagesController@contact');
Route::get('gallery', 'PagesController@gallery');

// Route::get('/', 'WelcomeController@index');

// Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
