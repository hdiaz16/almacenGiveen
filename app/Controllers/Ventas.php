<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\VentasModel;
use App\Models\ProductsModel;

class Ventas extends BaseController
{

	public $ventas;
	public $products;
	public $request;
	public $session;
	public $data;

	public function __construct($ventas = 0,$request = 0, $session = 0,  $data = 0, $products = 0  )
	{
		$this->ventas = new VentasModel();
		$this->request = \Config\Services::request();
		$this->session = session();
		$this->products  = new ProductsModel();

		$this->data = [
			'name' 				=> $this->session->get('name'),
			'email' 			=> $this->session->get('email'),
			'img' 				=> $this->session->get('img'),
			'typeOfPlatform'	=> $this->ventas->type_of_platforms(),
			'listOfProducts' 	=> $this->products->list_products(),
			'typeRecipe' 		=> $this->ventas->type_recipe()
		];
	}

	public function ventas()
	{


		$estructur =  view('main/header', $this->data).view('ventas/ventas', $this->data).view('main/footer');
		return $estructur;
	}


	public function add_sells()
	{

		

		$data = [

			'id_user' 			=> $this->request->getPostGet( 'idUser' ),
			'id_platform' 		=> $this->request->getPostGet( 'typeOfPlatform' ),
			'type_of_recipe' 	=> $this->request->getPostGet( 'typeRecipe' ),
			'date' 				=> $this->request->getPostGet( 'date' )
		];


		$data = $this->ventas->insert($data);


		$data1 = [

			'id_sell' 			=> $data,
			'id_products' 		=> $this->request->getPostGet( 'idarticulo' ),
			'quantity' 			=> $this->request->getPostGet( 'cantidad' )
		];

		$data1 = $this->ventas->insertDetalle($data1);


	}



	//--------------------------------------------------------------------

}
