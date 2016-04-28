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
                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>nombre alumno</th>
                                            <th>nombre apoderado</th>
                                            <th>telefono</th>
                                            <th>parentesco</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                              <?php

                              
                               foreach ($Students as $Student): 
                                $allNameStudent=$Student['NomEstudiante'].$Student['ApePaternoEstudiante'];
                                $allNameFather=$Student['NomApoderado'].$Student['ApePaternoApoderado'];
                                $phone=$Student['TelfApoderado'];

                                ?>
                                   <tr class="gradeA">
                                            <td class="center">
                                         <?php echo $allNameStudent ?>
                                            </td>
                                            <td class="center">                                            
                                                <?php echo $allNameFather ?>
                                            </td>
                                            <td class="center">
                                                <?php echo $phone ?>
                                            </td>
                                            <td class="center">
                                                padre
                                            </td>
                                        </tr> 
                              <?php endforeach ?>
                                   
                                                                          
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
