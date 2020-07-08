
$( document ).ready(function() {

	$('#idProducts').hide();

	$('#codeBar').hide();


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



