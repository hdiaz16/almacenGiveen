<div class="padding">
  <div class="row">
  	<div class="col-1"></div>

    	<div class="col-md-10">
      		<div class="box p-5">
			    <div class="box-header">
			      <h2>Lista de Productos</h2>
			      <small>Podras ver todos los productos que hay en el almacen.</small>
			    </div>

			    <table id="productos" class="table-responsive" style="width:100%">
			        <thead >
			            <tr >
			            	<th class="text-center">Opciones</th>
			                <th class="text-center">Codigo</th>
			                <th class="text-center">Nombre</th>
			                <th class="text-center">Marca</th>
			                <th class="text-center">Tipo de Producto</th>
			                <th class="text-center">Cont. Neto</th>
			                <th class="text-center">Cantidad (por pieza)</th>
			                <th class="text-center">Cantidad minima (por pieza)</th>
			                <th class="text-center">Cantidad por caja (catidad de piezas por caja)</th>
			                <th class="text-center">Ubicacion</th>
			                <th class="text-center">Imagen</th>

			            </tr>
			        </thead>
			        <tbody>
			        	<?php foreach ($listOfProducts as $row) {?>

			        		<?php if( $row->deleted_at == 0 ) { ?>

			        			<tr class="text-center">
				        		 	<td> 

				        		 		<div>
				        		 			<div class="col-6 btn-groups">
				        		 				<button class="btn btn-sm danger " data-toggle="modal" data-target="#m-a-f" onclick="modalDeleteProduct( <?php echo $row->id ?> );" >
								            		<i class="fa fa-remove"></i>
								            	</button>
								            	
				        		 			</div>

				        		 			<div class="col-6 btn-groups">
				        		 				
			        		 					<button class="btn btn-sm warn" data-toggle="modal" data-target="#top" 
			        		 						onclick="modalEditProduct( 
			        		 						'<?php echo $row->id ?>',
			        		 						'<?php echo $row->codigo ?>',
			        		 						'<?php echo $row->nombre ?>',
			        		 						'<?php echo $row->nameBrand ?>',
			        		 						'<?php echo $row->nameTipo ?>',
			        		 						'<?php echo $row->nameContNet ?>',
			        		 						'<?php echo $row->cantidad ?>',
			        		 						'<?php echo $row->cantidad_min ?>',
			        		 						'<?php echo $row->cantidad_caja ?>',
			        		 						'<?php echo $row->ubicacion ?>'

			        		 						);">


							            			<i class="fa fa-pencil"></i>
							            		</button>
				        		 				
				        		 			</div>
								        </div>

				        		 	</td>

					                <td> <?php echo $row->codigo ?> </td>
					                <td> <?php echo $row->nombre ?> </td>
					                <td> <?php echo $row->nameBrand ?> </td>
					                <td> <?php echo $row->nameTipo ?> </td>
					                <td> <?php echo $row->nameContNet ?> </td>
					                <td> <?php echo $row->cantidad ?> </td>
					                <td> <?php echo $row->cantidad_min ?> </td>
					                <td> <?php echo $row->cantidad_caja ?> </td>
					                <td> <?php echo $row->ubicacion ?> </td>
					                <td> <img  class="zoom" src="<?php echo $row->img ?>" width="100"> </td>

					            </tr>

			        		<?php }else{ ?>

			        		<?php } ?>

			        		 
			        		

			        	<?php }  ?>
			           
			        </tbody>
			        <tfoot>
			            <tr>
			            	<th class="text-center">Opciones</th>
			                <th class="text-center">Codigo</th>
			                <th class="text-center">Nombre</th>
			                <th class="text-center">Marca</th>
			                <th class="text-center">Tipo de Producto</th>
			                <th class="text-center">Cont. Neto</th>
			                <th class="text-center">Cantidad (por pieza)</th>
			                <th class="text-center">Cantidad minima (por pieza)</th>
			                <th class="text-center">Cantidad por caja (catidad de piezas por caja)</th>
			                <th class="text-center">Ubicacion</th>
			                <th class="text-center">Imagen</th>
			            </tr>
			        </tfoot>
			    </table>

			</div>
    	</div>


    	<div class="col-1"></div>


  	</div>
</div>





<div id="m-a-f" class="modal  " data-backdrop="true" style="display: none;" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
      	<h5 class="modal-title">Modal</h5>
      </div>
      <div class="modal-body text-center p-lg">
        <p>¿Seguro que quieres desactivar este producto?</p>
        <input type="number" name="idProducts" id="idProducts" >
      </div>
      <div class="modal-footer">
        <button type="button" class="btn dark-white p-x-md" data-dismiss="modal">No</button>
        <button type="button" class="btn danger p-x-md" data-dismiss="modal" id="deleteProduct">Si</button>
      </div>
    </div><!-- /.modal-content -->
  </div>
</div>










<!-- .modal -->
<div id="top" class="modal " data-backdrop="true" aria-hidden="true">
  <div class="top white  p-5">
    <div class="modal-content">
      <div class="modal-header">
      	<h5 class="modal-title">Editar Productos</h5>
      </div>
      <div class="modal-body text-center p-lg ">

      	<form  role="form" id="formDataProducts" enctype="multipart/formdata">

          	<div class="row">

          		<div class="col-4 ">
	          		<div class="md-form-group float-label">
	          			<label>Codigo</label>
		              	<input type="text" class="md-input " required="" name="codigo" id="codigo">
		              	
		            </div>
	          	</div>

	          	<div class="col-4 text-center" id="codeBar">
	          		<div class="md-form-group " id="printBarCode">
	          			
		              	<svg id="barcode"></svg>
		              	
		            </div>
	          	</div>

	          	<div class="col-4 ">
	          		<div class="md-form-group float-label">
	          		 	<label>Nombre</label>
		              	<input type="text" class="md-input" required="" name="nombre" id="nombre">
		              	
		           </div>
	          	</div>

	          	<div class="col-4 ">
	          		<div class="md-form-group ">
	          			<label>Marca</label>
		             
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

	          	<div class="col-4 ">
	          		<div class="md-form-group float-label">
	          			<label>Cantidad (por pieza)</label>
		              	<input type="number" class="md-input" required="" name="cantidad" id="cantidad">
		             
		            </div>
	          	</div>

	          	<div class="col-4 ">
	          		<div class="md-form-group float-label">
	          			<label>Cantidad minima (por pieza)</label>
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
          
            <button type="button" class="btn m-b" id="editProducts">Editar Producto</button>
          </form>
        	
      </div>
    
    </div><!-- /.modal-content -->
  </div>
</div>
<!-- / .modal -->
