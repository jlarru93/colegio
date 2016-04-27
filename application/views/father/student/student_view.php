       
        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Mis hijos</h1>
                </div>
                <!-- /.col-lg-12 -->             
            </div>
            <!-- /.row -->
            
            <div class="row">

            <?php foreach ($Students as $Student) {
            $gradoyseccion= substr($Student['CodGrado'],0,-1).'°'.$Student['NomSeccion'];
            $nivel=(substr($Student['CodGrado'],-1)=='S')?'Secundaria':'Primaria';
            $allname= $Student['NomEstudiante']. $Student['ApePaternoEstudiante']. $Student['ApeMaternoEstudiante'];
            
            $link=site_url('father/Student/course_student/'.$Student['CodEstudiante']).'/'.str_replace('+','_',urlencode($allname));
            $link_teacher=site_url('father/Student/teachers_student/'.$Student['CodEstudiante']).'/'.str_replace('+','_',urlencode($allname));
            ?>
                <div class="col-lg-3 col-md-6">
             <a href="<?php echo  $link; ?>">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-book fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge"><?php echo $gradoyseccion;?></div>
                                  <div><?php echo $nivel;?></div>
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo  $link;?>">
                            <div class="panel-footer">
                                <span class="pull-left">
                                <?php echo $allname;?>


                                </span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                     </a>
                <a href="<?php echo  $link_teacher; ?>" type="button" class="btn btn-success btn-lg btn-block">Ver Profesores</a>
                </div>


   
            <?php }
            ?>

            </div>
            <!-- /.row -->

            <!-- /.row -->
        </div>
        
        <!-- /#page-wrapper -->
