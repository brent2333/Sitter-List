<?php

// use View;
// use BaseController;

class UsersController extends BaseController {
	
	
	public function index()
	{
		return 'users index';
	}

	public function getCreateuser()
	{
		return View::make('users/create');
		
	}

	public function postCreateuser()
	{
		$user = new User;
		$user->email = Input::get('email');
		$user->password = Hash::make(Input::get('password'));
		$user->confirmation = rand(1000,10000);
		$user->save();
		return Redirect::to('/');
	}

	public function postLogin()
	{

		$userdata = array(
	    	'email' => Input::get('email'),
	    	'password' => Input::get('password'));
		if (Auth::attempt($userdata)) {
			$userid = Auth::user()->id;
			return Redirect::route('dashboard', array('userid' => $userid));
		} else {
			return 'login not working';
		}

	}

	public function getLogout() {
		Auth::logout();
		return Redirect::to('/');

	}



}