
 

<!-- ############ LAYOUT END-->

  </div>
<!-- build:js scripts/app.html.js -->
<!-- jQuery -->
 
  <script src="libs/jquery/screenfull/dist/screenfull.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
<!-- Bootstrap -->
  <script src="libs/jquery/tether/dist/js/tether.min.js"></script>
  <script src="libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
  
<!-- core -->
  <script src="libs/jquery/underscore/underscore-min.js"></script>
  <script src="libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
  <script src="libs/jquery/PACE/pace.min.js"></script>

  <script src="assets/scripts/config.lazyload.js"></script>
  <script src="assets/scripts/palette.js"></script>
  <script src="assets/scripts/ui-load.js"></script>
  <script src="assets/scripts/ui-jp.js"></script>
  <script src="assets/scripts/ui-include.js"></script>
  <script src="assets/scripts/ui-device.js"></script>
  <script src="assets/scripts/ui-form.js"></script>
  <script src="assets/scripts/ui-nav.js"></script>
  <script src="assets/scripts/ui-screenfull.js"></script>
  <script src="assets/scripts/ui-scroll-to.js"></script>
  <script src="assets/scripts/ui-toggle-class.js"></script>

  <script src="assets/scripts/app.js"></script>
  <script src="libs/js/myjs/tata.js"></script>
  <script src="libs/js/myjs/products.js"></script>
  <script src="libs/js/myjs/ventas.js"></script>
  
  <script src="//cdn.datatables.net/1.10.21/js/jquery.dataTables.min.js"></script>
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/jsbarcode@3.11.0/dist/JsBarcode.all.min.js"></script>
  <script type="text/javascript" src="libs/js/myjs/jquery.PrintArea.js"></script>


  <!-- ajax -->
  <script src="libs/jquery/jquery-pjax/jquery.pjax.js"></script>
  <script src="libs/jquery/footable/dist/footable.all.min.js"></script>
  <script src="assets/scripts/ajax.js"></script>
<!-- endbuild -->
<script type="text/javascript">

  $('#productos').DataTable( {
     language: {
        "decimal": "",
        "emptyTable": "No hay información",
        "info": "Mostrando _START_ a _END_ de _TOTAL_ Entradas",
        "infoEmpty": "Mostrando 0 to 0 of 0 Entradas",
        "infoFiltered": "(Filtrado de _MAX_ total entradas)",
        "infoPostFix": "",
        "thousands": ",",
        "lengthMenu": "Mostrar _MENU_ Entradas",
        "loadingRecords": "Cargando...",
        "processing": "Procesando...",
        "search": "Buscar:",
        "zeroRecords": "Sin resultados encontrados",
        "paginate": {
            "first": "Primero",
            "last": "Ultimo",
            "next": "Siguiente",
            "previous": "Anterior"
        }
    },

} );

  
  JsBarcode(".barcode").init();

</script>
</body>
</html>
