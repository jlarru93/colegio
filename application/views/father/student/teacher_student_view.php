   <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Los profesores de mi hijo</h1>
                </div>
                <!-- /.col-lg-12 -->             
            </div>


<div class="panel panel-default">
                        <div class="panel-heading">
                            los profesores de mis hijos
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre completo</th>
                                            <th>Telefono</th>
                                            <th>Correo</th>
                                        </tr>
                                    </thead>
                                    <tbody>

                                    <?php 
                                        $counta=0;
                                    foreach ($teachers as $teacher): 
                                        $counta++;
                                        $allNameTeacher=$teacher['NomProfesor'].$teacher['ApePaternoProfesor'].$teacher['ApeMaternoProfesor'];
                                        $phone=$teacher['TelfProfesor'];
                                        $email=$teacher['EmailProfesor'];
                                        ?>
                                        
                                          <tr>
                                            <td><?php echo $counta; ?></td>
                                            <td><?php echo  $allNameTeacher;?></td>
                                            <td><?php echo $phone; ?></td>
                                            <td><?php echo $email; ?></td>
                                        </tr>
                                    <?php endforeach ?>
                                      
                                     
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                        </div>
                        <!-- /.panel-body -->
                    </div>

    </div>


