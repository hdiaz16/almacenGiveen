<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductsModel;

class Products extends BaseController
{
	public $products;
	public $request;
	public $session;
	public $data;

	public function __construct($products = 0,$request = 0, $session = 0, $data = 0)
	{
		$this->products = new ProductsModel();
		$this->request = \Config\Services::request();
		$this->session = session();

		$this->data = [
			'name' 				=> $this->session->get('name'),
			'email' 			=> $this->session->get('email'),
			'img' 				=> $this->session->get('img'),
			'listOfProducts' 	=> $this->products->list_products(),
			'typeProduct' 		=> $this->products->type_of_producst(),
			'brand' 			=> $this->products->brands(),
			'contNet' 			=> $this->products->cont_net()
		];
	}


	public function products()
	{
	

		$data = [
			'name' 			=> $this->session->get('name'),
			'email' 		=> $this->session->get('email'),
			'img' 			=> $this->session->get('img'),
			'typeProduct' 	=> $this->products->type_of_producst(),
			'brand' 		=> $this->products->brands(),
			'contNet' 		=> $this->products->cont_net()
		];
	
		$estructur =  view('main/header', $data ).view('products/addProducts', $data ).view('main/footer');
		return $estructur;
	}


	public function listProducts()
	{
	
		$estructur =  view('main/header', $this->data ).view('products/listProduct', $this->data).view('main/footer');
		return $estructur;
	}



	public function addProducts()
	{

		$carpetRout = "assets/images/products/";
		$nameImg = "img".date("dHis") .".". pathinfo($_FILES["img"]["name"],PATHINFO_EXTENSION);
		$saveCarpetRout = $carpetRout . $nameImg;
		move_uploaded_file($_FILES["img"]["tmp_name"],$saveCarpetRout);
		
		$data = [

			'id_marca' 			=> $this->request->getPost( 'marca' ),
			'id_tipo_producto' 	=> $this->request->getPost( 'tipoProducto' ),
			'id_cont_net' 		=> $this->request->getPost( 'contenidoNeto' ),
			'nombre' 			=> $this->request->getPost( 'nombre' ),
			'codigo'			=> $this->request->getPost( 'codigo' ),
			'cantidad' 			=> $this->request->getPost( 'cantidad' ),
			'cantidad_min' 		=> $this->request->getPost( 'cantidadMinima' ),
			'cantidad_caja' 	=> $this->request->getPost( 'cantidadPorCaja' ),
			'ubicacion' 		=> $this->request->getPost( 'ubicacion' ),
			'img'				=> $saveCarpetRout
		];

		$data = $this->products->insert($data);

		if ( isset( $data ) ) {

			$result = array( 'error' => false, 'title' => "Producto guardado" ,'data' => "El producto se guardo correctamente" ); 
			echo json_encode( $result ); 
		}else{

			$result = array( 'error' => true, 'title' => "Hubo un problema" ,'data' => "El producto no se guardo correctamente, si el error persiste comunicate con el administardor " );
			echo json_encode( $result );

		}

	
	}




	public function editProducts()
	{

		$id = $this->request->getPost( 'id' );

		$fotoActual = $this->products->where('id', $id)
                  ->first();

		print_r($fotoActual);
		exit();

		$carpetRout  			= "assets/images/products/";
		$nameImg 				= "img".date("dHis") .".". pathinfo($_FILES["img"]["name"],PATHINFO_EXTENSION);
		$saveCarpetRoutEdit 	= $carpetRout . $nameImg;
		move_uploaded_file($_FILES["img"]["tmp_name"],$saveCarpetRoutEdit);

		

		
		
		$data = [

			'id_marca' 			=> $this->request->getPost( 'marca' ),
			'id_tipo_producto' 	=> $this->request->getPost( 'tipoProducto' ),
			'id_cont_net' 		=> $this->request->getPost( 'contenidoNeto' ),
			'nombre' 			=> $this->request->getPost( 'nombre' ),
			'codigo'			=> $this->request->getPost( 'codigo' ),
			'cantidad' 			=> $this->request->getPost( 'cantidad' ),
			'cantidad_min' 		=> $this->request->getPost( 'cantidadMinima' ),
			'cantidad_caja' 	=> $this->request->getPost( 'cantidadPorCaja' ),
			'ubicacion' 		=> $this->request->getPost( 'ubicacion' ),
			'img'				=> $saveCarpetRoutEdit != null ? $saveCarpetRoutEdit : "",
		];

		$data = $this->products->update($id, $data);

		if ( isset( $data ) ) {

			$result = array( 'error' => false, 'title' => "Producto editado" ,'data' => "El producto se edito correctamente" ); 
			echo json_encode( $result ); 
		}else{

			$result = array( 'error' => true, 'title' => "Hubo un problema" ,'data' => "El producto no se edito  correctamente, si el error persiste comunicate con el administardor " );
			echo json_encode( $result );

		}

	
	}




	public function deleteProducts()
	{
		$idProduct = $this->request->getPost('idProducts');

		$data = [
		    'deleted_at' => 1
		];

		$data = $this->products->update($idProduct, $data);
		
		

		if ( isset( $data ) ) {

			$result = array( 'error' => false, 'title' => "Producto borrado" ,'data' => "El producto se borro correctamente" ); 
			echo json_encode( $result ); 
		}else{

			$result = array( 'error' => true, 'title' => "Hubo un problema" ,'data' => "El producto no se borro correctamente, si el error persiste comunicate con el administardor " );
			echo json_encode( $result );

		}
	}

	//--------------------------------------------------------------------

}
