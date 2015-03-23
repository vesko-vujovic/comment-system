<?php

/*
|--------------------------------------------------------------------------
| Comment system routes
|--------------------------------------------------------------------------
|
| Here are all routes for this app
|
*/


Route::get('/', 'HomeController@index');

Route::get('/admin', 'AdminController@logIn');

Route::get('facebook/login', function(){

   return \Laravel\Socialite\Facades\Socialite::with('facebook')->redirect();

});

Route::get('facebook/loged/', ['as' => 'logedwithfacebook', 'uses' => 'FacebookController@getFacebookUser']);


Route::get('/test', function(){



});




Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);
