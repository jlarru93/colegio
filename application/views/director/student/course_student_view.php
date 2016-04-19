<div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Cursos del alumno</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->

            <div class="row">
            <?php      //   print_r($courses[0]);           ?>
        <?php foreach ($courses as $course) { ?>
                <div class="col-lg-3 col-md-6">
                 <a href="<?php echo site_url('/Director/student/score_student/'.$course['CodCurso']); ?>">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <div class="row">
                                <div class="col-xs-3">
                                   <i class="fa fa-users fa-5x"></i>

                                   
                                </div>
                                  <div class="col-xs-9 text-right">
                                    <div class="huge"></div>
                                   <div> <?php echo $course['NombresProfesor'];?></div>
                                </div>                                              
                          
                            </div>
                        </div>
                       
                            <div class="panel-footer">
                                <span class="pull-left"><?php echo $course['DescripCurso'];?></span>
                                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                                <div class="clearfix"></div>
                            </div>
                       
                    </div>
                     </a>
                </div>

             
 
      
 <?php } ?>

            </div>

            <!-- /.row -->
           
            </div>
            <!-- /.row -->
</div>
        <!-- /#page-wrapper -->