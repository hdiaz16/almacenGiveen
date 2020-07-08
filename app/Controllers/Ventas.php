<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\VentasModel;
use App\Models\DetalleVentasModel;
use App\Models\ProductsModel;

class Ventas extends BaseController
{

	public $ventas;
	public $products;
	public $request;
	public $session;
	public $data;
	public $detailsSells;


	public function __construct($ventas = 0,$request = 0, $session = 0,  $data = 0, $products = 0, $detailsSells = 0  )
	{
		$this->ventas = new VentasModel();
		$this->request = \Config\Services::request();
		$this->session = session();
		$this->products  = new ProductsModel();
		$this->detailsSells  = new DetalleVentasModel();


		$this->data = [
			'id' 				=> $this->session->get('id'),
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
		$idProducts 	= 	$this->request->getPostGet( 'idarticulo' );
		$quantity 		= 	$this->request->getPostGet( 'cantidad' );
		$num_element	= 0;
		

		$data = [

			'id_user' 			=> $this->request->getPostGet( 'idUser' ),
			'id_platform' 		=> $this->request->getPostGet( 'typeOfPlatform' ),
			'type_of_recipe' 	=> $this->request->getPostGet( 'typeRecipe' ),
			'total_products' 	=> $this->request->getPostGet( 'total_compra' ),
			'date' 				=> $this->request->getPostGet( 'date' )
		];


		$result = $this->ventas->insert($data);



		while ($num_element < count($idProducts) )  {
		 	$data1 = [
				'id_sell' 			=> $result,
				'id_products' 		=> $idProducts[ $num_element ],
				'quantity' 			=> $quantity[ $num_element ]
			];


			var_dump($idProducts[ $num_element ]);


			$query = "INSERT INTO det_sells (id_sell,id_products,quantity) VALUES(".$result.",".$idProducts[ $num_element ].",".$quantity[ $num_element ].")";

		 	$num_element = $num_element++;
	 	}

		




	}



	//--------------------------------------------------------------------

}

