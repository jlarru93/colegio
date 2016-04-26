    <!-- jQuery -->
    <script src="<?php echo base_url() ;?>/bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="<?php echo base_url() ;?>/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="<?php echo base_url() ;?>/bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="<?php echo base_url() ;?>/bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="<?php echo base_url() ;?>/bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="<?php echo base_url() ;?>/dist/js/sb-admin-2.js"></script>


     <!-- Bootstrap Datepicker -->
    <script src="<?php echo base_url() ;?>/js/bootstrap-datepicker.js"></script>

     <!-- JQuery -->
    <script src="<?php echo base_url() ;?>/js/bootstrap-datepicker.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
        
        $('button').on('click',function(e){
            //id CodTipoEvaluacion_1_idCourse_$idStudent
            var id=$(this).attr('name');
           console.log(id);
            //alert('da');
            var contenedor=document.getElementById("notas_trimestral");

var fila = document.createElement("tr");
var celda1= document.createElement("th");
var celda2= document.createElement("th");
// Crear nodo de tipo Text
var contenido1 = document.createTextNode(id);
var contenido2 = document.createTextNode(id);
 
// Añadir el nodo Text como hijo del nodo Element
celda1.appendChild(contenido1);
celda2.appendChild(contenido2);


fila.appendChild(celda1);
fila.appendChild(celda2);
 
// Añadir el nodo Element como hijo de la pagina
contenedor.appendChild(fila);
            
   var request;
            if (request) {
                request.abort();
            };
            request=$.ajax({
                url:"<?php echo base_url('/Father/Course/Score');?>" ,
                type:"POST",
                //CodTipoEvaluacion_1_idCourse_$idStudent
                //TE008_1_C114_EST00094
               data:'codEstudiante='+id
            });
        
          request.done(function(response,TextStatus,jqXHR){
            console.log(response);
          });


            request.fail(function(jqXHR,TextStatus,thrown){
               console.log('Error '+TextStatus);
            });

            request.always(function(){
                console.log('termino');
            });

            e.preventDefault();
    

        });
    });
    </script>

    <script>
        $(function(){
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
            
        });
    </script>


