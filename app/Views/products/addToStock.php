<div class="padding">
  <div class="row">

  		<div class="col-2"></div>

  		<div class="col-8">
	  		<div class="box p-5 ">
			    <div class="box-header">
			      	<h2>Agregar al Stock </h2>
	      			<small>Aqui podras agregar mas prodcusto al stock que ya se tiene.</small>
			    </div>

			    <table id="productos" class="table cells" style="width:100% !important">
			        <thead >
			            <tr >
			            	<th class="text-center">Opciones</th>
			            	<th class="text-center">Codigo</th>
			                <th class="text-center">Nombre</th>
			                <th class="text-center">Cantidad (por pieza)</th>
			                <th class="text-center">Cantidad minima (por pieza)</th>
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
				        		 				<button class="btn btn-sm success " data-toggle="modal" data-target="#m-a-f" onclick="modalAddToStock( 

				        		 					'<?php echo $row->id ?>',
			        		 						'<?php echo $row->codigo ?>',
			        		 						'<?php echo $row->nombre ?>',
			        		 						'<?php echo $row->cantidad ?>',
			        		 						'<?php echo $row->cantidad_min ?>'
				        		 				);" >
			 
								            		<i class="fa fa-th-large" aria-hidden="true"></i>
								            	</button>
								            	
				        		 			</div>
								        </div>

				        		 	</td>

					                <td> <?php echo $row->codigo ?> </td>
					                <td> <?php echo $row->nombre ?> </td>
					                <td> <?php echo $row->cantidad ?> </td>
					                <td> <?php echo $row->cantidad_min ?> </td>
					                <td> <img  class="" src="<?php echo $row->img ?>" width="100"> </td>

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
			                <th class="text-center">Cantidad (por pieza)</th>
			                <th class="text-center">Cantidad minima (por pieza)</th>
			                <th class="text-center">Imagen</th>
			            </tr>
			        </tfoot>
			    </table>

			</div>
		</div>

    	<div class="col-2"></div>


  	</div>
</div>





<div id="m-a-f" class="modal  " data-backdrop="true" style="display: none;" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content">
      <div class="modal-header">
      	<h5 class="modal-title">Agrear a Stock </h5>
      	<small>Agregar mas productos al stock existente.</small> 
      </div>
      <div class="modal-body text-center p-lg">

      	<form  role="form" id="formDataProducts">

          	<div class="row">

          		<div class="col-4 " hidden="true">
	          		<div class="md-form-group float-label">
	          			<strong><label>Id</label></strong>
		              	<input type="text" class="md-input " required="" name="id" id="id" >
		              	
		            </div>
	          	</div>

          		<div class="col-4 ">
	          		<div class="md-form-group float-label">
	          			<strong><label>Codigo</label></strong>
		              	<input type="text" class="md-input " required="" name="codigo" id="codigo" readonly="true">
		              	
		            </div>
	          	</div>

	          	<div class="col-4 ">
	          		<div class="md-form-group float-label">
	          		 	<strong><label>Nombre</label></strong>
		              	<input type="text" class="md-input" required="" name="nombre" id="nombre" readonly="true">
		              	
		           </div>
	          	</div>


	          	<div class="col-4 ">
	          		<div class="md-form-group float-label">
	          			<strong><label>Cantidad minima (por pieza)</label></strong>
		              	<input type="number" class="md-input" required="" name="cantidadMinima" id="cantidadMinima" readonly="true">
		            </div>
	          	</div>  	

	          	<div class="col-6 ">
	          		<div class="md-form-group float-label">
	          			<strong><label>Cantidad atcual (por pieza)</label></strong>
		              	<input type="number" class="md-input" required="" name="cantidad" id="cantidad" readonly="true">
		             
		            </div>
	          	</div>

	          	<div class="col-6 ">
	          		<div class="md-form-group float-label">
	          			<strong><label>Ingresa los nuevos producto (por pieza)</label></strong>
		              	<input type="number" class="md-input" required="" name="nuevaCantidad" id="nuevaCantidad" >
		             
		            </div>
	          	</div> 


	          	<div class="col-6 " id="stockNuevoDiv">
	          		<div class="md-form-group float-label">
	          			<strong><label>Cantidad de Stock a guardar </label></strong>
		              	<input type="number" class="md-input stockNuevo" required="" name="stockNuevo" id="stockNuevo" readonly="true">
		             
		            </div>
	          	</div>   
          	</div>

        </form>

      
      </div>
      <div class="modal-footer">
        <button type="button" class="btn dark-white p-x-md" data-dismiss="modal">No</button>
        <button type="button" class="btn success p-x-md" data-dismiss="modal" id="addNewStock">Actualizar Stock</button>
      </div>
    </div><!-- /.modal-content -->
  </div>
</div>






