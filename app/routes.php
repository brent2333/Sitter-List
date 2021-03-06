<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', function()
{
	return View::make('home');
});

Route::controller('users', 'UsersController');

Route::get('dashboard/{userid}', array('before' => 'auth', 'as' => 'dashboard', function($userid) 
{
	//echo 'dashboard for user '.$userid;
	return View::make('users/dashboard')->with('userid', $userid);
}));

Route::controller('lists', 'ListsController');
