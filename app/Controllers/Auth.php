<?php namespace App\Controllers;

use App\Models\UserModel;

class Auth extends BaseController
{

	public function user()
	{
		
		$request = \Config\Services::request();
		$auth = new UserModel($db);
		$session = session();
		
		$username = $request->getPostGet('login-username');
		
		$password = $request->getPostGet('login-password');

		$user = $auth->user($username);

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

			$session->set($sessionData);
			$session = session();

			

			if($this->session->has('username') && $sessionData['logged_in'] == TRUE){

				$data = [
        			'online'    => 1,
					'offline'   => 0
				];



				$auth->update($this->session->get('id'), $data);

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
		
		$auth = new UserModel($db);
    	$session = session();


		$data = [
        	'online'    => 0,
			'offline'   => 1
		];

		$auth->update($this->session->get('id'), $data);

	    
	    $session->stop();
		$session->destroy();


		return redirect()->to( base_url() );

	}


	public function logOutInactivity()
	{
		
		$auth = new UserModel($db);
    	$session = session();


		$data = [
        	'online'    => 0,
			'offline'   => 1
		];

		$auth->update($this->session->get('id'), $data);

	    
	    $session->stop();
		$session->destroy();


		if($this->session->get('id') != null){
					
			$resultado = array('error' => false );
            echo json_encode($resultado);	
			
		}else{
			echo  json_encode($data = array('error' => true));
		}

	}









}

