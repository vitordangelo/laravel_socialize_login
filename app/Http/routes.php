<?php

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('/redirect', 'SocialAuthController@redirect');
Route::get('/callback', 'SocialAuthController@callback');
