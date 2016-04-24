              <div id="page-wrapper">
                   <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Criterios de Evaluacion</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Emphasis Classes
                        </div>
                        <div class="panel-body">
                        <ul>
                        <?php foreach ($typeEvaluations as $typeEvaluation) {
                            # code...
                        ?>
                 
                            <li><a href="<?php echo site_url('father/Course/Score/'.$typeEvaluation['CodTipoEvaluacion']); ?>" ><?php echo "".$typeEvaluation['DescripTipoEvaluacion'] ; ?></a></li>

                        <?php  }

                            ?>
                        </ul>
                        </div>
                        <!-- /.panel-body -->
                    </div>
                    <!-- /.panel -->
                </div>
                </div>

                