<?php namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{

	public $request;
	public $session;
	public $data;

	public function __construct($products = 0,$request = 0, $session = 0, $data = 0)
	{

		$this->auth  = new UserModel();
		$this->request = \Config\Services::request();
		$this->session = session();
	}


	public function user()
	{
		
		
		$username = $this->request->getPostGet('login-username');
		
		$password = $this->request->getPostGet('login-password');

		$user = $this->auth->user($username);

		if (password_verify($password, $user->password ) && $user->username == $username ) {

			$sessionData = [
					'id'  		=> $user->id,
					'name'  	=> $user->name,
			        'username'  => $user->username,
			        'pass'  	=> $user->password,
			        'email'     => $user->email,
			        'img'     	=> $user->img,
			        'logged_in' => TRUE,
			        'online'    => 1,
			        'offline'   => 0

			];

			$this->session->set($sessionData);
			$this->session = session();

			

			if($this->session->has('username') && $sessionData['logged_in'] == TRUE){

				$data = [
        			'online'    => 1,
					'offline'   => 0
				];



				$this->auth->update($this->session->get('id'), $data);

				return redirect()->to( base_url('dashboard') );
			}else{
                
                
				return redirect()->to( base_url() );
			}
			

		}else{
		    
			return redirect()->to( base_url() );
			
		}



	}



	public function logOut()
	{
		

    


		$this->data = [
        	'online'    => 0,
			'offline'   => 1
		];

		$auth->update($this->session->get('id'), $data);

	    
	    $this->session->stop();
		$this->session->destroy();


		return redirect()->to( base_url() );

	}


	public function logOutInactivity()
	{
		

		$this->data = [
        	'online'    => 0,
			'offline'   => 1
		];

		$this->auth->update($this->session->get('id'), $data);

	    
	    $this->session->stop();
		$this->session->destroy();


		if($this->session->get('id') != null){
					
			$resultado = array('error' => false );
            echo json_encode($resultado);	
			
		}else{
			echo  json_encode($data = array('error' => true));
		}

	}









}

