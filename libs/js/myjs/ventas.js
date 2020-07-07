
var cont=0;
var detalles=0;
var subtotal=0;


function agregarDetalle(idarticulo,articulo){
	var cantidad=1;

	if (idarticulo!="") {
		var subtotal=cantidad;
		var fila='<tr class="filas text-center" id="fila'+cont+'">'+
        	'<td><button type="button" class="btn btn-sm danger " onclick="eliminarDetalle('+cont+')"><i class="fa fa-remove"></i></button></td>'+
        	'<td><input type="hidden" name="idarticulo[]" value="'+idarticulo+'">'+articulo+'</td>'+
        	'<td><input  class="md-input cantidad" type="number" name="cantidad[]" id="cantidad[]" value="'+cantidad+'"></td>'+
        	'<td><span id="subtotal'+cont+'" name="subtotal">'+subtotal+'</span></td>'+
		'</tr>';
		cont++;
		detalles++;
		$('#detalles').append(fila);
	

	}else{
		alert("error al ingresar el detalle, revisar las datos del articulo ");
	}
}



$(document).on('input', '.cantidad', function(){

		var cant =	document.getElementsByName("cantidad[]");
		var sub  =	document.getElementsByName("subtotal");


		for (var i = 0; i < cant.length; i++) {
			var inpV =	cant[i];
			var inpS =	sub[i];


			inpS.value = inpV.value;
			document.getElementsByName("subtotal")[i].innerHTML = inpS.value;
		}

		calcularTotales();

});





function calcularTotales(){
	var sub = document.getElementsByName("subtotal");
	var total=0.0;

	for (var i = 0; i < sub.length; i++) {
		total += document.getElementsByName("subtotal")[i].value;
	}
	$("#total").html("S/." + total);
	$("#total_venta").val(total);

}


function eliminarDetalle(indice){

	$("#fila"+indice).remove();
	calcularTotales();
	detalles=detalles-1;

}






$('#addSells').click(function () {

			var formData = new FormData(document.getElementById("formDataSells"));

		$.ajax ( {
		    url : 'add-sells',
		    type : 'POST',
    		dataType: 'json',
    		data:formData,
          	processData: false, 
          	contentType: false,
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