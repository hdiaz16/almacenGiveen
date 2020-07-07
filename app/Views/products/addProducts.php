<div class="padding">
  <div class="row">
  	<div class="col-2"></div>

    <div class="col-md-8">
      <div class="box">
        <div class="box-header">
          <h2>Agregar Productos</h2>
          <small>Podras agregar todos los productos.</small>
        </div>
        
        <div class="box-body">
          <form role="form" id="formDataProducts" enctype="multipart/formdata">

          	<div class="row">

          		<div class="col-4 ">
	          		<div class="md-form-group float-label">
	          			<label>Codigo</label>
		              	<input type="text" class="md-input " required="" name="codigo" id="codigo">
		              	
		            </div>
		            <button type="button" class="btn btn-sm success" id="generateBarCode">Genrar codigo</button>
		            <button type="button" class="btn btn-sm info" id="print">Imprimir</button>
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

	          	<div class="col-6 ">
	          		<div class="md-form-group float-label">
	          			<label>Cantidad (por pieza)</label>
		              	<input type="number" class="md-input" required="" name="cantidad" id="cantidad">
		             
		            </div>
	          	</div>

	          	<div class="col-6 ">
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
          
            <button type="button" class="btn m-b" id="addProducts">Guardar</button>
          </form>
        </div>
      </div>
    </div>
    <div class="col-2"></div>
  </div>
</div>






