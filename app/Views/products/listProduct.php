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
				        		 				
			        		 					<button class="btn btn-sm warn">
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