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

		$id_sell = $result;


		foreach ($idProducts as $key => $id) {

				$data1 = [
					'id_sell' 			=> $id_sell,
					'id_products' 		=> $idProducts[$key],
					'quantity' 			=> $quantity[$key]	

				];


			$result1 = $this->detailsSells->insert_det_sells($data1);
				
		}



		if ( isset( $result1 ) ) {

			$result = array( 'error' => false, 'title' => "Venta guardada" ,'data' => "La venta se guardo correctamente" ); 
			echo json_encode( $result ); 
		}else{

			$result = array( 'error' => true, 'title' => "Hubo un problema" ,'data' => "La venta no se guardo correctamente, si el error persiste comunicate con el administardor " );
			echo json_encode( $result );

		}


	}



	//--------------------------------------------------------------------

}




