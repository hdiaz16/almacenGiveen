<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductsModel;
use App\Models\VentasModel;
use App\Models\DetalleVentasModel;

class Dashboard extends BaseController
{


	public $products;
	public $sells;
	public $request;
	public $session;
	public $data;

	public function __construct($products = 0, $sells = 0, $request = 0, $session = 0, $data = 0)
	{
		$this->products = new ProductsModel();
		$this->sells 	= new VentasModel();
		$this->request 	= \Config\Services::request();
		$this->session 	= session();

		$this->data = [
			'name' 						=> $this->session->get('name'),
			'email' 					=> $this->session->get('email'),
			'img' 						=> $this->session->get('img'),
			'countOfProducts' 			=> $this->products->count_products(),
			'countOfSells' 				=> $this->sells->count_sells(),
			'countOfProductsDeleted' 	=> $this->products->count_products_deleted(),
			'typeProduct' 				=> $this->products->type_of_producst(),
			'brand' 					=> $this->products->brands(),
			'contNet' 					=> $this->products->cont_net()
		];
	}

	public function index()
	{
	
		$estructur =  view('main/header', $this->data ).view('dashboard/dashboard', $this->data ).view('main/footer');
		return $estructur;
	}

	//--------------------------------------------------------------------

}
