<?php namespace App\Controllers;

class Login extends BaseController
{
	public function index()
	{

		$estructur =  view('header').view('login').view('footer');
		return $estructur;
	}

	//--------------------------------------------------------------------

}
