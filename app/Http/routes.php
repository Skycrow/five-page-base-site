<?php

Route::get('about', 'PagesController@about');
Route::get('contact', 'PagesController@contact');

Route::get('/', 'WelcomeController@index');

Route::get('home', 'HomeController@index');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
