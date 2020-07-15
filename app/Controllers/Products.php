<?php namespace App\Controllers;

use CodeIgniter\Controller;
use App\Models\ProductsModel;
use App\Models\BoxesModel;
use App\Models\BrandsModel;

class Products extends BaseController
{
	public $products;
	public $request;
	public $session;
	public $data;
	public $boxes;
	public $brand;

	public function __construct($products = 0,$request = 0, $session = 0, $data = 0, $boxes = 0, $brand = 0)
	{
		$this->products = new ProductsModel();
		$this->boxes 	= new BoxesModel();
		$this->brand 	= new BrandsModel();
		$this->request 	= \Config\Services::request();
		$this->session 	= session();

		$this->data = [
			'name' 				=> $this->session->get('name'),
			'email' 			=> $this->session->get('email'),
			'img' 				=> $this->session->get('img'),
			'listOfProducts' 	=> $this->products->list_products(),
			'listOfBrands' 		=> $this->brand->list_brand(),
			'typeProduct' 		=> $this->products->type_of_producst(),
			'brand' 			=> $this->brand->list_brand(),
			'contNet' 			=> $this->products->cont_net()
		];
	}


	public function products()
	{	
		$estructur =  view('main/header', $this->data ).view('products/addProducts', $this->data ).view('main/footer');
		return $estructur;
	}


	public function listProducts()
	{
	
		$estructur =  view('main/header', $this->data ).view('products/listProduct', $this->data).view('main/footer');
		return $estructur;
	}



	
	public function addStock()
	{

		$estructur =  view('main/header', $this->data ).view('products/addToStock', $this->data).view('main/footer');
		return $estructur;
		
	}



// Agreagr un producto 
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



// Editar un producto 
	public function editProducts()
	{

		$id  		  = $this->request->getPost( 'id' );
		$tipoProducto = $this->request->getPost( 'tipoProducto' );
		$nameProduct  = $this->request->getPost( 'nombre' );

		switch ($tipoProducto) {
			case 1:
					$carpetRout  			= "assets/images/products/shampooLiquido/";
				break;
			case 2:
					$carpetRout  			= "assets/images/products/shampooSolido/";
				break;
			case 3:
					$carpetRout  			= "assets/images/products/ceraNatural/";
				break;
			case 4:
					$carpetRout  			= "assets/images/products/crema/";
				break;
			case 5:
					$carpetRout  			= "assets/images/products/sanitizante/";
				break;
			case 6:
					$carpetRout  			= "assets/images/products/balsamoLabial/";
				break;
			case 7:
					$carpetRout  			= "assets/images/products/gel/";
				break;
			case 8:
					$carpetRout  			= "assets/images/products/alcoholGel/";
				break;
			case 9:
					$carpetRout  			= "assets/images/products/tapeteSanitizantes/";
				break;
			
			default:
				# code...
				break;
		}


		$nameImg 				= $nameProduct.".". pathinfo($_FILES["img"]["name"],PATHINFO_EXTENSION);
		$saveCarpetRoutEdit 	= $carpetRout . $nameImg;
		move_uploaded_file($_FILES["img"]["tmp_name"],$saveCarpetRoutEdit);

		
		if ( move_uploaded_file($_FILES["img"]["tmp_name"],$saveCarpetRoutEdit) == true ) {

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
				'img'				=> $saveCarpetRoutEdit
			];

		}else{

			$data = [

				'id_marca' 			=> $this->request->getPost( 'marca' ),
				'id_tipo_producto' 	=> $this->request->getPost( 'tipoProducto' ),
				'id_cont_net' 		=> $this->request->getPost( 'contenidoNeto' ),
				'nombre' 			=> $this->request->getPost( 'nombre' ),
				'codigo'			=> $this->request->getPost( 'codigo' ),
				'cantidad' 			=> $this->request->getPost( 'cantidad' ),
				'cantidad_min' 		=> $this->request->getPost( 'cantidadMinima' ),
				'cantidad_caja' 	=> $this->request->getPost( 'cantidadPorCaja' ),
				'ubicacion' 		=> $this->request->getPost( 'ubicacion' )
			];

		}
		
		
		

		$data = $this->products->update($id, $data);

		if ( isset( $data ) ) {

			$result = array( 'error' => false, 'title' => "Producto editado" ,'data' => "El producto se edito correctamente" ); 
			echo json_encode( $result ); 
		}else{

			$result = array( 'error' => true, 'title' => "Hubo un problema" ,'data' => "El producto no se edito  correctamente, si el error persiste comunicate con el administardor " );
			echo json_encode( $result );

		}

	
	}


// Borrar un producto 

	public function deleteProducts()
	{
		$idProduct = $this->request->getPost('idProducts');

		$data = [
		    'deleted_at' => 1
		];

		$result = $this->products->update($idProduct, $data);
		
		

		if ( $result != null  ) {

			$result = array( 'error' => false, 'title' => "Producto borrado" ,'data' => "El producto se borro correctamente" ); 
			echo json_encode( $result ); 
		}else{

			$result = array( 'error' => true, 'title' => "Hubo un problema" ,'data' => "El producto no se borro correctamente, si el error persiste comunicate con el administardor " );
			echo json_encode( $result );

		}
	}








	public function addBoxes()
	{
		
		$data = [

			'name' 			=> $this->request->getPost( 'nombreCaja' ),
			'dimension' 	=> $this->request->getPost( 'dimensions' ),
			'stock' 		=> $this->request->getPost( 'cantStock' ),
			'stockMin'		=> $this->request->getPost( 'cantMinStock' )
		];

		$data = $this->boxes->insert($data);

		if ( isset( $data ) ) {

			$result = array( 'error' => false, 'title' => "Caja guardada" ,'data' => "La caja se guardo correctamente" ); 
			echo json_encode( $result ); 
		}else{

			$result = array( 'error' => true, 'title' => "Hubo un problema" ,'data' => "La caja no se guardo correctamente, si el error persiste comunicate con el administardor " );
			echo json_encode( $result );

		}
	}


	public function addBrand()
	{
		
		$data = [ 'name' => $this->request->getPostGet( 'nombreMarca' ) ];


		$result = $this->brand->insert($data);

		
		if ( isset( $result ) ) {

			$result = array( 'error' => false, 'title' => "Categoria Agregada" ,'data' => "La categoria se agrego correctamente" ); 
			echo json_encode( $result ); 
		}else{

			$result = array( 'error' => true, 'title' => "Hubo un problema" ,'data' => "La categoria no se agrego correctamente, si el error persiste comunicate con el administardor " );
			echo json_encode( $result );
		}
	}

	public function deleteBrand()
	{
		$idBrand = $this->request->getPost('id');

		$result = $this->brand->delete($idBrand);


		if ( $result != null  ) {

			$result = array( 'error' => false, 'title' => "Marca borrado" ,'data' => "La marca se borro correctamente" ); 
			echo json_encode( $result ); 
		}else{

			$result = array( 'error' => true, 'title' => "Hubo un problema" ,'data' => "La marca no se borro correctamente, si el error persiste comunicate con el administardor " );
			echo json_encode( $result );

		}
	}

	public function editBrand()
	{
		$idBrand = $this->request->getPost('id');

		$data = ['name' => $this->request->getPost('nombre')];

		$result = $this->brand->update($idBrand, $data);
		
		

		if ( isset( $result ) ) {

			$result = array( 'error' => false, 'title' => "Marca editada" ,'data' => "La marca se edito correctamente" ); 
			echo json_encode( $result ); 
		}else{

			$result = array( 'error' => true, 'title' => "Hubo un problema" ,'data' => "La marca no se edito correctamente, si el error persiste comunicate con el administardor " );
			echo json_encode( $result );

		}
	}



	public function addToStock()
	{
		$id 			= $this->request->getPostGet( 'id' );

		$data = ['cantidad' => $this->request->getPostGet( 'stockNuevoAct' ) ];

		$result = $this->products->update($id, $data);

		if ( isset( $result ) ) {

			$result = array( 'error' => false, 'title' => "Producto Actualizado" ,'data' => "El stock se actualizo correctamente" ); 
			echo json_encode( $result ); 
		}else{

			$result = array( 'error' => true, 'title' => "Hubo un problema" ,'data' => "El stock no se actualizo correctamente, si el error persiste comunicate con el administardor " );
			echo json_encode( $result );
		}
	}




	

	//--------------------------------------------------------------------

}
