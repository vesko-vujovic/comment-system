<?php

/*
|--------------------------------------------------------------------------
| Comment system application
|--------------------------------------------------------------------------
|
| Here are all routes for this app
|
*/

/*
 * User Routes
 *
 */

 Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

 Route::get('facebook/loged/', ['as' => 'logedwithfacebook', 'uses' => 'FacebookController@getFacebookUser']);

 Route::get('/logout', ['as' => 'logout', 'uses' => 'HomeController@logout']);

 Route::get('facebook/login', function(){

   return \Laravel\Socialite\Facades\Socialite::with('facebook')->redirect();

 });





Route::get('/test', function(){

	$l = \Carbon\Carbon::now()->subDay(1);
    dd($l);

});



/*
 * Admin Routes For Application
 *
 */



