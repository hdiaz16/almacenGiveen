
$( document ).ready(function() {

	$('#idProducts').hide();
	$('#codeBar').hide();
	$('#stockNuevoDiv').hide();
	$('#idMarca').hide();



	


	$( "#addProducts" ).click(function() {

		var codigo 				= $('#codigo').val();
		var nombre 				= $('#nombre').val();
		var marca 				= $('#marca').val();
		var tipoProducto 		= $('#tipoProducto').val();
		var contenidoNeto 		= $('#contenidoNeto').val();
		var cantidadPorPieza 	= $('#cantidad').val();
		var cantidadMinPorPieza = $('#cantidadMinima').val();
		var cantidadPorCaja 	= $('#cantidadPorCaja').val();
		var ubicacion 			= $('#ubicacion').val();

		var formData = new FormData(document.getElementById("formDataProducts"));

		formData.append("img",$("input[name=img]")[0].files[0]);

		$.ajax ( {
		    url : 'add-products',
		    type : 'POST',
    		dataType: 'json',
    		data:formData,
          	processData: false, 
          	contentType: false,
		    success : function(data) {

		        if (data.error == false) {

		    		tata.success( data.title, data.data, {
				  		duration: 3000,
				  		animate: 'slide'
					});

					$('#codigo').val("");
					$('#nombre').val("");
					$('#marca').val("");
					$('#tipoProducto').val("");
					$('#contenidoNeto').val("");
					$('#cantidad').val("");
					$('#cantidadMinima').val("");
					$('#cantidadPorCaja').val("");
					$('#ubicacion').val("");


		    	}else{
		    		tata.danger( data.title, data.data, {
				  		duration: 5000,
				  		animate: 'slide'
					});
		    	}
		   	}
		});
	  		

	});




	$( "#addBoxes" ).click(function() {

		var codigo 				= $('#nombreCaja').val();
		var nombre 				= $('#dimensions').val();
		var marca 				= $('#cantStock').val();
		var tipoProducto 		= $('#cantMinStock').val();

		var formData = new FormData(document.getElementById("formDataBoxes"));

		$.ajax ( {
		    url : 'add-boxes',
		    type : 'POST',
    		dataType: 'json',
    		data:formData,
          	processData: false, 
          	contentType: false,
		    success : function(data) {

		        if (data.error == false) {

		    		tata.success( data.title, data.data, {
				  		duration: 3000,
				  		animate: 'slide'
					});

					$('#nombreCaja').val("");
					$('#dimensions').val("");
					$('#cantStock').val("");
					$('#cantMinStock').val("");


		    	}else{
		    		tata.danger( data.title, data.data, {
				  		duration: 5000,
				  		animate: 'slide'
					});
		    	}
		   	}
		});
	  		

	});



	$( "#editProducts" ).click(function() {

		var codigo 				= $('#codigo').val();
		var nombre 				= $('#nombre').val();
		var marca 				= $('#marca').val();
		var tipoProducto 		= $('#tipoProducto').val();
		var contenidoNeto 		= $('#contenidoNeto').val();
		var cantidadPorPieza 	= $('#cantidad').val();
		var cantidadMinPorPieza = $('#cantidadMinima').val();
		var cantidadPorCaja 	= $('#cantidadPorCaja').val();
		var ubicacion 			= $('#ubicacion').val();

		var formData = new FormData(document.getElementById("formDataProducts"));

		formData.append("img",$("input[name=img]")[0].files[0]);

		$.ajax ( {
		    url : 'edit-products',
		    type : 'POST',
    		dataType: 'json',
    		data:formData,
          	processData: false, 
          	contentType: false,
    		beforeSend: function(){

                $('.submitBtn').attr("disabled","disabled");
               
            },
		    success : function(data) {

		        if (data.error === false) {

		    		tata.success( data.title, data.data, {
				  		duration: 5000,
				  		animate: 'slide'
					});

		    	}else{
		    		tata.danger( data.title, data.data, {
				  		duration: 5000,
				  		animate: 'slide'
					});
		    	}
		   	}
		});
	  		

	});


	$('#deleteProduct').click(function () {

		var idProducts 	= $('#idProducts').val();

		$.ajax ( {
		    url : 'delete-products',
		    type : 'POST',
    		dataType: 'json',
    		data:idProducts,
          	processData: false, 
          	contentType: false,
    		beforeSend: function(){

                $('#deleteProduct').attr("disabled","disabled");
               
            },
		    success : function(data) {

		    	if (data.error === false) {

		    		tata.success( data.title, data.data, {
				  		duration: 5000,
				  		animate: 'slide'
					});

		    	}else{
		    		tata.danger( data.title, data.data, {
				  		duration: 5000,
				  		animate: 'slide'
					});

		    	}
		        


		   	}
		});

	});



	$('#generateBarCode').click(function () {

		$('#codeBar').show();

		var code 	= $('#codigo').val();


		JsBarcode("#barcode",code , {
		  width: 1,
		  height: 60,
		  fontOptions: "bold",
		  displayValue: true
		});
		
	});


	$('#print').click(function () {

		$("#printBarCode").printArea();
	});




	$('#addNewStock').click(function () {

		var stockNuevoAct 	= $('#stockNuevo').val();
		var id 				= $('#id').val();

		

		$.ajax ( {
		    url : 'add-stock',
		    type : 'POST',
    		dataType: 'json',
    		data: { id: id, stockNuevoAct: stockNuevoAct },
		    success : function(data) {

		    	if (data.error == false) {

		    		tata.success( data.title, data.data, {
				  		duration: 5000,
				  		animate: 'slide'
					});

		    	}else{
		    		tata.danger( data.title, data.data, {
				  		duration: 5000,
				  		animate: 'slide'
					});
		    	} 
		   	}
		});

	});

	$("input[name='nuevaCantidad']").keyup(function(){
	    

	    var cantidadNueva 	= parseInt($('#nuevaCantidad').val());
		var stockActual 	= parseInt($('#cantidad').val());
		var nuevoStock		= (cantidadNueva + stockActual);

		$('#stockNuevo').val(nuevoStock);
		$('#stockNuevoDiv').show();

	});





	$('#addNewBrand').click(function () {

		var nombreMarca 	= $('#nombreMarca').val();

		$.ajax ( {
		    url : 'add-brand',
		    type : 'POST',
    		dataType: 'json',
    		data: { nombreMarca: nombreMarca},
		    success : function(data) {

		    	if (data.error == false) {

		    		tata.success( data.title, data.data, {
				  		duration: 3000,
				  		animate: 'slide'
					});

					setTimeout(function() {
					  location.reload();
					}, 3000);

		    	}else{
		    		tata.danger( data.title, data.data, {
				  		duration: 5000,
				  		animate: 'slide'
					});
		    	} 
		   	}
		});

	});


	$('#deleteBrand').click(function () {

		var id 				= $('#idMarca').val();

		$.ajax ( {
		    url : 'delete-brand',
		    type : 'POST',
    		dataType: 'json',
    		data: { id: id },
		    success : function(data) {

		    	if (data.error == false) {

		    		tata.success( data.title, data.data, {
				  		duration: 5000,
				  		animate: 'slide'
					});

		    	}else{
		    		tata.danger( data.title, data.data, {
				  		duration: 5000,
				  		animate: 'slide'
					});
		    	} 
		   	}
		});

	});

	$('#editBrand').click(function () {

		var id 				= $('#idMarca1').val();
		var nombre 			= $('#nombreMarca1').val();

		$.ajax ( {
		    url : 'edit-brand',
		    type : 'POST',
    		dataType: 'json',
    		data: { id: id, nombre: nombre },
		    success : function(data) {

		    	if (data.error == false) {

		    		tata.success( data.title, data.data, {
				  		duration: 5000,
				  		animate: 'slide'
					});

		    	}else{
		    		tata.danger( data.title, data.data, {
				  		duration: 5000,
				  		animate: 'slide'
					});
		    	} 
		   	}
		});

	});





	

});










function modalDeleteProduct( id ) {

 	$('#idProducts').val(id);
}


function modalEditProduct( id,codigo,nombre,idBrand,nameTipo,nameContNet,cantidad,cantidad_min,cantidad_caja,ubicacion  ) {



 	$('#id').val(id);
 	$('#codigo').val(codigo);
 	$('#nombre').val(nombre);
 	$('select#marca').val(idBrand);
 	$('select#tipoProducto').val(nameTipo);
 	$('select#contenidoNeto').val(nameContNet);
 	$('#cantidad').val(cantidad);
 	$('#cantidadMinima').val(cantidad_min);
 	$('#cantidadPorCaja').val(cantidad_caja);
 	$('#ubicacion').val(ubicacion);

}

function modalAddToStock(id,codigo,nombre,cantidad,cantidad_min) {


	$('#id').val(id);
 	$('#codigo').val(codigo);
 	$('#nombre').val(nombre);
 	$('#cantidad').val(cantidad);
 	$('#cantidadMinima').val(cantidad_min);
 	

}




function modalDeleteBrand ( id ) {

 	$('#idMarca').val(id);
}

function modalEditBrand (id,name) {
	$('#idMarca1').val(id);
 	$('#nombreMarca1').val(name);
}


