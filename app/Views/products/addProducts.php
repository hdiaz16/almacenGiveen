<div class="padding">
  <div class="row">
  	<div class="col-2"></div>

    <div class="col-md-8">
      <div class="box">
        <div class="box-header">
          <h2>Agregar </h2>
          <small>Aqui podras agregar todo lo que se necesite para el inventario.</small>
        </div>
        
        <div class="box-body">


        	<div class="col-lg-12">
		        <div class="b-b b-primary nav-active-primary">
		          <ul class="nav nav-tabs">
		            <li class="nav-item">
		              <a class="nav-link active" href="" data-toggle="tab" data-target="#tab4" aria-expanded="false">Agregar Productos</a>
		            </li>
		            <li class="nav-item">
		              <a class="nav-link " href="" data-toggle="tab" data-target="#tab5" aria-expanded="false">Agregar Cajas</a>
		            </li>
		            <li class="nav-item">
		              <a class="nav-link " href="" data-toggle="tab" data-target="#tab6" aria-expanded="false">Agregar Marcas</a>
		            </li>

		          </ul>
		        </div>


		        <div class="tab-content p-a m-b-md">

		          	<div class="tab-pane animated fadeIn text-muted active" id="tab4" aria-expanded="true">
		           	
		           		<form role="form" id="formDataProducts" enctype="multipart/formdata">

				          	<div class="row">

				          		<div class="col-4 ">
					          		<div class="md-form-group float-label">
					          			<label>Codigo del Producto</label>
						              	<input type="text" class="md-input " required="" name="codigo" id="codigo">
						              	
						            </div>
						            <button type="button" class="btn btn-sm success" id="generateBarCode">Genrar codigo</button>
						            <button type="button" class="btn btn-sm info" id="print">Imprimir</button>
					          	</div>

					          	<div class="col-4 text-center" >
					          		<div class="md-form-group " id="printBarCode">
					          			
						              	<svg id="barcode"></svg>
						              	
						            </div>
					          	</div>

					          	<div class="col-4 ">
					          		<div class="md-form-group float-label">
					          		 	<label>Nombre del Producto</label>
						              	<input type="text" class="md-input" required="" name="nombre" id="nombre">
						              	
						           </div>
					          	</div>

					          	<div class="col-4 ">
					          		<div class="md-form-group ">
					          			<label>Marca del Producto</label>
						             
						              	<select class="md-input" required="" name="marca" id="marca">
						              			<option > Seleccione una opcion</option>

						              		<?php foreach ($brand as $row) { ?>

						              			<option id="<?php echo $row->id ?>" name="<?php echo $row->id ?>" value="<?php echo $row->id ?>"> <?php echo $row->name; ?></option>

						              		<?php } ?>

						              	</select>
						              	
						            </div>
					          	</div>

					          	<div class="col-4 ">
					          		<div class="md-form-group ">
					          			<label>Tipo de Producto</label>

						              	<select class="md-input" required="" name="tipoProducto" id="tipoProducto">
						              			<option > Seleccione una opcion</option>

						              		<?php foreach ($typeProduct as $row) { ?>

						              			<option id="<?php echo $row->id ?>" name="<?php echo $row->id ?>" value="<?php echo $row->id ?>"> <?php echo $row->name; ?></option>

						              		<?php } ?>

						              	</select>

						              	
						            </div>
					          	</div>

					          	<div class="col-4 ">
					          		<div class="md-form-group ">
					          			<label> Contenido Neto</label>
						            
						         	 	<select class="md-input" required="" name="contenidoNeto" id="contenidoNeto">
						              			<option > Seleccione una opcion</option>

						              		<?php foreach ($contNet as $row) { ?>

						              			<option id="<?php echo $row->id ?>" name="<?php echo $row->id ?>" value="<?php echo $row->id ?>"> <?php echo $row->name; ?></option>

						              		<?php } ?>

						              	</select>

						              	
						            </div>
					          	</div>

					          	<div class="col-6 ">
					          		<div class="md-form-group float-label">
					          			<label>Cantidad en Stock (por pieza)</label>
						              	<input type="number" class="md-input" required="" name="cantidad" id="cantidad">
						             
						            </div>
					          	</div>

					          	<div class="col-6 ">
					          		<div class="md-form-group float-label">
					          			<label>Cantidad minima en Stock (por pieza)</label>
						              	<input type="number" class="md-input" required="" name="cantidadMinima" id="cantidadMinima">
						            </div>
					          	</div>

					          	<div class="col-4 ">
					          		<div class="md-form-group float-label">
					          			<label>Cantidad por caja (catidad de piezas por caja)</label>
						             	<input type="number" class="md-input" required="" name="cantidadPorCaja" id="cantidadPorCaja">
						            </div>
					          	</div>

					          	<div class="col-4 ">
					          		<div class="md-form-group float-label">
					          			<label>Ubicacion</label>
						              	<input type="text" class="md-input" required="" name="ubicacion" id="ubicacion">
						            </div>
					          	</div>

					          	<div class="col-4">
					          		<div class="md-form-group">
						              	<label for="exampleInputFile">Seleccionar Imagen</label>
						              	<input type="file" id="img" name="img" class="md-inpu has-value">
						            </div>
					          	</div>

				          	</div>
				          
				            <button type="button" class="btn m-b" id="addProducts">Guardar</button>
				        </form>
		          	</div>



		          <div class="tab-pane animated fadeIn text-muted " id="tab5" aria-expanded="false">


		          		<form role="form" id="formDataBoxes" enctype="multipart/formdata">

				          	<div class="row">

					          	<div class="col-3 ">
					          		<div class="md-form-group float-label">
					          		 	<label>Nombre de la Caja</label>
						              	<input type="text" class="md-input" required="" name="nombreCaja" id="nombreCaja">
						              	
						           </div>
					          	</div>

					          	<div class="col-3 ">
					          		<div class="md-form-group ">
					          			<label>Dimensiones</label>
						              	<input type="text" class="md-input" required="" name="dimensions" id="dimensions">
						              	
						            </div>
					          	</div>


					          	<div class="col-3 ">
					          		<div class="md-form-group float-label">
					          			<label>Cantidad en Stock </label>
						              	<input type="number" class="md-input" required="" name="cantStock" id="cantStock">
						            </div>
					          	</div>

					          	<div class="col-3 ">
					          		<div class="md-form-group float-label">
					          			<label>Cantidad minima en Stock </label>
						              	<input type="number" class="md-input" required="" name="cantMinStock" id="cantMinStock">
						            </div>
					          	</div>

				          	</div>
				          
				            <button type="button" class="btn m-b" id="addBoxes">Guardar</button>
				        </form>
		            
		          </div>




		          	<div class="tab-pane animated fadeIn text-muted " id="tab6" aria-expanded="false">

		          		<div class="row">

		          			<div class="col-6">
			          			<form role="form" id="formDataBrand">
						          	<div class="row">

							          	<div class="col-10 ">
							          		<div class="md-form-group float-label">
							          		 	<label>Nombre de la Marca</label>
								              	<input type="text" class="md-input" required="" name="nombreMarca" id="nombreMarca">
								              	
								           </div>
							          	</div>

						          	</div>
						          
						            <button type="button" class="btn m-b" id="addNewBrand">Guardar</button>
					        	</form>
			          		</div>

			          		<div class="col-6" >
			          			
			          			<table id="productos" class="table" style="width:100%">
							        <thead >
							            <tr >
							            	<th class="text-center">Opciones</th>
							            	<th class="text-center">Nombre</th>
							     			
							            </tr>
							        </thead>
							        <tbody >
							        	<?php foreach ($listOfBrands as $row) { ?>

							        		<?php if ($row->deleted_at == 0) { ?>

							        			<tr class="text-center" id="tableReload">
								        		 	<td> 

								        		 		<p class="m-b btn-groups">
								        		 			
								        		 				<button class="btn btn-sm danger " data-toggle="modal" data-target="#m-a-f" onclick="modalDeleteBrand( <?php echo $row->id ?> );" >
												            		<i class="fa fa-remove"></i>
												            	</button>
								        		 	
							        		 					<button class="btn btn-sm warn" data-toggle="modal" data-target="#top" 
							        		 						onclick="modalEditBrand( 
							        		 						'<?php echo $row->id ?>',
							        		 						'<?php echo $row->name ?>'
							        		 						);">
											            			<i class="fa fa-pencil"></i>
											            		</button>	
								        		 		
												        </p>

								        		 	</td>
									                <td> <?php echo $row->name ?> </td>
								
									            </tr>

							        		<?php }else{  ?>

							        		<?php } ?>

							        			
							        	<?php }  ?>
							           
							        </tbody>
							        <tfoot>
							            <tr>
							            	<th class="text-center">Opciones</th>
							            	<th class="text-center">Nombre</th>
							            </tr>
							        </tfoot>
							    </table>

			          		</div>
		          			


		          		</div>

		          		
		          		
		            
		          	</div>







		        </div>
		    </div>




          
        </div>
      </div>
    </div>
    <div class="col-2"></div>
  </div>
</div>














<div id="m-a-f" class="modal  " data-backdrop="true" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      	<h5 class="modal-title">Desactivar Marca</h5>
      </div>
      <div class="modal-body text-center p-lg">
        <p>¿Seguro que quieres desactivar esta marca?</p>
        <input type="number" name="idMarca" id="idMarca" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn dark-white p-x-md" data-dismiss="modal">No</button>
        <button type="button" class="btn danger p-x-md" data-dismiss="modal" id="deleteBrand">Si</button>
      </div>
    </div><!-- /.modal-content -->
  </div>
</div>




<!-- .modal -->
<div id="top" class="modal " data-backdrop="true" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      	<h5 class="modal-title">Editar Marca</h5>
      </div>
      <div class="modal-body text-center p-lg ">

      	<form  role="form" id="formDataMarca">

          	<div class="row">

          		<div class="col-12 " hidden="true">
	          		<div class="md-form-group float-label">
	          			<label>Id</label>
		              	<input type="text" class="md-input " name="idMarca1" id="idMarca1">
		              	
		            </div>
	          	</div>

          		<div class="col-12 ">
	          		<div class="md-form-group float-label">
	          			<label>Nombre de la Marca</label>
		              	<input type="text" class="md-input " required="" name="nombreMarca1" id="nombreMarca1">
		              	
		            </div>
	          	</div> 	

          	</div>
          
            <button type="button" class="btn m-b" id="editBrand">Editar Marca</button>
          </form>
        	
      </div>
    
    </div><!-- /.modal-content -->
  </div>
</div>
<!-- / .modal -->
