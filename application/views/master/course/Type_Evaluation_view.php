              <?php $course_name=str_replace('_',' ',urldecode($course_name)); ?>
              <div id="page-wrapper">
                   <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Criterios de evaluacion</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <?php echo $course_name; ?>
                        </div>
                        <div class="panel-body">
                        <ul>
                        <?php 
                        $course_name=str_replace('+','_',urlencode($course_name));
                        foreach ($typeEvaluations as $typeEvaluation) {
                            $CodTipoEvaluacion=$typeEvaluation['CodTipoEvaluacion'];
                            $DescripTipoEvaluacion_link=str_replace('+','_',urlencode($typeEvaluation['DescripTipoEvaluacion']));
                            
                            $link=site_url('Master/Course/Score/'.$CodTipoEvaluacion.'/'.$idCourse.'/'.$idsection.'/'.$DescripTipoEvaluacion_link.'/'.$course_name);

                        ?>
                 
                            <li><a href="<?php echo $link; ?>" ><?php echo $typeEvaluation['DescripTipoEvaluacion'] ; ?></a></li>

                        <?php  }

                            ?>
                        </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                </div>