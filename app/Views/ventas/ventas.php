<div class="padding">
  <div class="row">
  	<div class="col-2"></div>

    	<div class="col-md-8">
      		<div class="box p-5">
			    <div class="box-header">
			      <h2>Ventas</h2>
			      <small>Podras ver todos las ventas que se han hecho.</small>
			    </div>

			    <form role="form" id="formDataSells" >

		          	<div class="row">
		          		<div class="col-3 ">
			          		<div class="md-form-group ">
				              	<input class="md-input " name="idUser" id="idUser" value=" <?php echo $name ?> " readonly>
				              	<label>¿Quien ingresa? </label>
				            </div>
			          	</div>

			          	<div class="col-3 ">
			          		<div class="md-form-group ">
				             
				              	<select class="md-input" required="" name="typeOfPlatform" id="typeOfPlatform">
				              			<option > Seleccione una opcion</option>

				              		<?php foreach ($typeOfPlatform as $row) { ?>

				              			<option id="<?php echo $row->id ?>" name="<?php echo $row->id ?>" value="<?php echo $row->id ?>"> <?php echo $row->name; ?></option>

				              		<?php } ?>

				              	</select>
				              	<label>Plataforma de Venta</label>
				            </div>
			          	</div>

			          	<div class="col-3 ">
			          		<div class="md-form-group ">
				              	<select class="md-input" required="" name="typeRecipe" id="typeRecipe">
				              			<option > Seleccione una opcion</option>

				              		<?php foreach ($typeRecipe as $row) { ?>

				              			<option id="<?php echo $row->name ?>" name="<?php echo $row->name ?>" > <?php echo $row->name; ?></option>

				              		<?php } ?>

				              	</select>
				              	<label>Tipo Comprobante </label>
				            </div>
			          	</div>

			          	<div class="col-3 ">
			          		<div class="md-form-group ">
				              	<input class="md-input " name="date" id="date" value=" <?php echo date("d/m/Y")  ?> " readonly>
				              	<label>Fecha </label>
				            </div>
			          	</div>

			        </div>

			        <div class="row">

			        	<div class="col-6">
			        		<button type="button" class="btn btn-fw success" data-toggle="modal" data-target="#top" id="selectProducts"> <i class="fa fa-plus"></i> Agregar Producto</button>
			        	</div>


			        	<div class="col-12 md-form-group ">
			        		<table id="detalles" class="table table-striped table-bordered table-condensed table-hover">
						       <thead >
						        <th class="text-center">Opciones</th>
						        <th class="text-center">Producto</th>
						        <th class="text-center">Cantidad Productos</th>
						        <th class="text-center">Subtotal Productos</th>
						       </thead>
						       <tfoot >
						         <th class="text-center" >TOTAL</th>
						         
						         <th><h5 id="total"></h5><input type="hidden" name="total_compra" id="total_compra"></th>
						       </tfoot>
						       <tbody>
						         
						       </tbody>
					    	</table>

			        	</div>

			        	

			        </div> 
          
            		<button type="button" class="btn m-b" id="addSells">Guardar Venta</button>
          		</form>
			</div>


    	</div>

    


    	<div class="col-2"></div>


  	</div>
</div>




<!-- .modal -->
<div id="top" class="modal " data-backdrop="true" aria-hidden="true">
  <div class="top white b-b p-5">
    <div class="modal-content">
      <div class="modal-header">
      	<h5 class="modal-title">Productos</h5>
      </div>
      <div class="modal-body text-center p-lg">
        	<table id="productos" class="table table-striped table-bordered table-condensed table-hover">
			       <thead >
			       	<th class="text-center">Opcion</th>
			        <th class="text-center">Codigo</th>
			        <th class="text-center">Nombre</th>
			        <th class="text-center">Marca</th>
			        <th class="text-center">Cantidad</th>
			        <th class="text-center">Imagen</th>
			        <th class="text-center">Estado</th>
			       </thead>
			       <tfoot >

			       	<?php foreach ($listOfProducts as $row) {?>

			       		<?php if( $row->deleted_at == 0 ) { ?>

			        		<tr class="text-center">

			        			<td > <button class="btn btn-sm  success" value="<?php echo $row->id ?> " onclick="agregarDetalle(<?php echo $row->id ?>, '<?php echo $row->nombre ?>' )"><i class="fa fa-plus"></i></button> </td>
				                <td> <?php echo $row->codigo ?> </td>
				                <td> <?php echo $row->nombre ?> </td>
				                <td> <?php echo $row->nameBrand ?> </td>
				                <td> <?php echo $row->cantidad ?> </td>
				                <td> <img src=" <?php echo $row->img ?> " width="50"></td>

				                <?php if ( $row->deleted_at == 0 ){ ?>

				                	<td data-value="0" class="footable-visible footable-last-column"><span class="label success" title="Active">Activo</span></td>

				                <?php }else{  ?>

				                	<td data-value="1" class="footable-visible footable-last-column"><span class="label danger" title="Active">Inactivo</span></td>

				                <?php } ?>
				              
				            </tr>
				            
		        		<?php }else{ ?>

		        		<?php }  ?>

		        	<?php }  ?>
			         
			       </tfoot>
			       <tbody>
			         
			       </tbody>
		    </table>

      </div>
    
    </div><!-- /.modal-content -->
  </div>
</div>
<!-- / .modal -->
