        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Profesores</h1>
                </div>
                <!-- /.col-lg-12 -->             
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">                                
                          <a href="<?php echo site_url('Director/Teacher/add'); ?>" class="btn btn-primary" role="button">Registrar</a>          
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>nombre completo</th>
                                            <th>telefono</th>
                                            <th>correo</th>
                                            <th>direccion</th>
                                            <th>acciones</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 
                                    foreach ($teachers as $teacher) {
                                        $fullname=$teacher['nomProfesor'].' '.$teacher['apePaternoProfesor'].' '.$teacher['apeMaternoProfesor'];
                                        $link1=site_url('Director/Teacher/course_teacher/'.$teacher['codProfesor']);


                                        $link2=site_url('Director/Teacher/relation_course_teacher/'.$teacher['codProfesor'].'/'.str_replace('+','_',urlencode($fullname)));

                                        # code...
                                    ?>
                                        <tr class="odd gradeX">
                                            <td>
                                                <?php
                                                    echo $fullname;
                                                ?>

                                            </td>
                                            <td>
                                                 <?php
                                                    echo $teacher['telfProfesor'];
                                                ?>
                                            </td>
                                            <td> 
                                            <?php
                                                    echo $teacher['emailProfesor'];
                                                ?>
                                            </td>
                                            <td class="center"> 
                                            <?php
                                                    echo $teacher['dirProfesor'];
                                                ?>
                                            </td>
                                            <td class="center">
                                                <a href="<?php echo $link1; ?>" class="btn btn-primary btn-circle" role="button"><i class="glyphicon glyphicon-check"></i></a>
                                                <a href="<?php echo $link2; ?>" class="btn btn-success btn-circle" role="button"><i class="fa fa-arrows-h"></i></a>                                                
                                                <a href="<?php echo '#'; ?>" class="btn btn-info btn-circle" role="button"><i class="fa fa-check"></i></a> 
                                                <a href="<?php echo '#'; ?>" class="btn btn-danger btn-circle" role="button"><i class="fa fa-times"></i></a> 
                                                
                                            </td>
                                        </tr>
                                      <?php   }?>
                                    </tbody>
                                </table>
                            </div>
                         
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->

        <!-- jQuery -->
    <script src="../bower_components/jquery/dist/jquery.min.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="../bower_components/bootstrap/dist/js/bootstrap.min.js"></script>

    <!-- Metis Menu Plugin JavaScript -->
    <script src="../bower_components/metisMenu/dist/metisMenu.min.js"></script>

    <!-- DataTables JavaScript -->
    <script src="../bower_components/datatables/media/js/jquery.dataTables.min.js"></script>
    <script src="../bower_components/datatables-plugins/integration/bootstrap/3/dataTables.bootstrap.min.js"></script>

    <!-- Custom Theme JavaScript -->
    <script src="../dist/js/sb-admin-2.js"></script>

    <!-- Page-Level Demo Scripts - Tables - Use for reference -->
    <script>
    $(document).ready(function() {
        $('#dataTables-example').DataTable({
                responsive: true
        });
    });
    </script>