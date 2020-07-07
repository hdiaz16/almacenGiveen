<?php namespace App\Controllers;

use CodeIgniter\Controller;

class Dashboard extends BaseController
{

	public function index()
	{
		

		$data['name'] 	= $this->session->get('name');
		$data['email'] 	= $this->session->get('email');
		$data['img'] 	= $this->session->get('img');
		


		$estructur =  view('main/header', $data ).view('dashboard/dashboard', $data ).view('main/footer');
		return $estructur;
	}

	//--------------------------------------------------------------------

}
