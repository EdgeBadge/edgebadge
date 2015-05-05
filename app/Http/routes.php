<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function(){
	return "<pre>edgebadge v0.0.1b</pre>";
});

Route::get('schueler','PagesController@dashboard_schueler');
Route::get('subject','PagesController@subject');
Route::get('badgedetail','PagesController@badgedet');
Route::get('dashboard', 'PagesController@dashboard');
Route::get('badge-erstellen', 'PagesController@badgeErstellen');
Route::get('persona', 'PagesController@persona');
Route::post('auth/login', 'PagesController@login');
Route::get('register','PagesController@register');



Route::controllers([
    'auth' => 'Auth\AuthController',
    'password' => 'Auth\PasswordController',
]);
