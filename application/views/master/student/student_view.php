        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Alumnos</h1>
                </div>
                <!-- /.col-lg-12 -->             
            </div>
            <!-- /.row -->
            
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">                                
                          <a href="<?php echo site_url('student/add_student'); ?>" class="btn btn-primary" role="button">Registrar</a>          
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>nombre completo</th>
                                            <th>grado y seccion</th>
                                            <th>turno</th>
                                            <th>accion</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php  //var_dump($alumnos[1]);?>
                               <?php foreach ($alumnos as $alumno) { ?>
                                   
                                        <tr class="gradeA" onclick="location='<?php echo site_url('student/index'); ?>'">
                                            <td class="center">
                                            <?php // nombre del alumno;
                                              echo  $alumno['estudiante']['nomEstudiante'].
                                                $alumno['estudiante']['apePaternoEstudiante'].
                                                $alumno['estudiante']['apeMaternoEstudiante'];
                                            ?>
                                            </td>
                                            <td class="center">
                                             <?php // turno del alumno;
                                              echo 
                                              $alumno['seccion']['grado']['descripGrado'].' '.'"'.
                                              $alumno['seccion']['nomSeccion'].'"';
                                            ?>  

                                            </td>
                                            <td class="center">
                                                   <?php // turno del alumno;
                                              echo 
                                             $alumno['seccion']['turno'];
                                            ?>  
                                            </td>
                                            <td class="center">

                                                <a title="ver cursos" href="<?php echo site_url('student/course_student/'.$alumno['estudiante']['codEstudiante']); ?>" class="btn btn-primary btn-circle" role="button"><i class="glyphicon glyphicon-check"></i></a>
                                                <a title="ver apoderados" href="<?php echo site_url('student/father_student'); ?>" class="btn btn-warning btn-circle" role="button"><i class="fa fa-list"></i></a>                                                
                                                <a title="asociar con apoderado" href="<?php echo site_url('student/relation_father_student'); ?>" class="btn btn-success btn-circle" role="button"><i class="fa fa-arrows-h"></i></a>            
                                                <a title="activar" href="<?php echo site_url('student/add_student'); ?>" class="btn btn-info btn-circle" role="button"><i class="fa fa-check"></i></a> 
                                                <a title="desactivar" href="<?php echo site_url('student/add_student'); ?>" class="btn btn-danger btn-circle" role="button"><i class="fa fa-times"></i></a> 
                                                
                                            </td>
                                        </tr>
                                       
                                <?php } ?>
                                 
                                    
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
