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

                $('#notas_record tr').each(function() {

                       
                        $(this).children('td').each(function(){

                            $(this).children('button').attr('class', 'btn btn-primary btn-lg btn-block');     
                        });

                });

                $(this).attr('class', 'btn btn-info btn-lg btn-block');



                $('#notas_trimestral tr').each(function() {

                  $(this).remove();

              });


            //id CodTipoEvaluacion_1_idCourse_$idStudent
            var id=$(this).attr('name');
             console.log(id);
            
            var request;
            if (request) {
                request.abort();
            };
            request=$.ajax({
                url:"<?php echo base_url('/Father/Course/Score');?>" ,
                type:"POST",
                //contentType: "application/json; charset=utf-8",
                dataType: "json",
                data:"codEstudiante="+id
            });

            request.done(function(response,TextStatus,jqXHR){
                console.log(response);
                var results=response;

//var results = [ {"id":"10", "class": "child-of-9"}, {"id":"11", "classd": "child-of-10"}];

results.forEach( function( item ) {

 var contenedor=document.getElementById("notas_trimestral");

 var fila = document.createElement("tr");
 var celda1= document.createElement("th");
 var celda2= document.createElement("th");

 var contenido1 = document.createTextNode(item.DescripEvaluacion);
 var contenido2 = document.createTextNode(item.nota);

 celda1.appendChild(contenido1);
 celda2.appendChild(contenido2);


 fila.appendChild(celda1);
 fila.appendChild(celda2);

 contenedor.appendChild(fila);
});











});


            request.fail(function(jqXHR,TextStatus,thrown){
                console.log('Error hh '+TextStatus);
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


