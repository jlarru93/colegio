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

        });
    </script>
    <script>
        $(function(){
            $('.datepicker').datepicker({
                format: 'yyyy-mm-dd'
            });
            
        }); 
    </script>

    <script>
        $('#icol').click(function(){
           
            if($('#col').val()){
                $('#notas tr').append($("<td>"));
                $('#notas thead tr>td:last').html($('#col').val());
                $('#notas tbody tr').each(
                                            function()
                                            {
                                        
                                                  var jhon=$(this).children('td:first').attr('id');
                                               
                                                $(this).children('td:last').append(
                                                            $('<input class="form-control" value="0" name="'.concat(jhon,'" required>')))
                                               }
                                        );
                $('#criterios').val($('#col').val());
                //document.getElementById('criterios').value=;


            }else{alert('INGRESE NOMBRE DE NOTA');}
        });
    </script>

