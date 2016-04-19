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
            ?>
                <div class="col-lg-3 col-md-6">
             <a href="<?php echo site_url('father/Student/course_student/'.$Student['CodEstudiante']); ?>">
                    <div class="panel panel-green">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                    <i class="glyphicon glyphicon-book fa-5x"></i>
                                </div>
                                <div class="col-xs-9 text-right">
                                    <div class="huge">4°B</div>
                                  
                                </div>
                            </div>
                        </div>
                        <a href="<?php echo site_url('father/Student/course_student/'.$Student['CodEstudiante']); ?>">
                            <div class="panel-footer">
                                <span class="pull-left">
                                <?php echo $Student['NomEstudiante'];?>
                                <?php echo $Student['ApePaternoEstudiante'];?>
                                <?php echo $Student['ApeMaternoEstudiante'];?>


                                </span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                        </a>
                    </div>
                     </a>
                </div>

   
            <?php }
            ?>

            </div>
            <!-- /.row -->

            <!-- /.row -->
        </div>
        <!-- /#page-wrapper -->
