             <?php 
                $nameStudent=str_replace('_',' ',urldecode($nameStudent));
                $nameCurso=str_replace('_',' ',urldecode($nameCurso));
                $nameTeacher=str_replace('_',' ',urldecode($nameTeacher));

             ?>





<!-- Scroll bar present and enabled -->        
 
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
                        <?php echo $nameStudent.' / '.$nameCurso.' / '.$nameTeacher?>
                    </div>
                    <div class="panel-body">

                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th rowspan="2">criterio de evaluacion</th>
                                        <th colspan="3" class="text-center">trimestres</th>

                                    </tr>
                                    <tr>
                                        <th>primero</th>
                                        <th>segundo</th>
                                        <th>trercero</th>
                                    </tr>
                                </thead>

                                 <tbody id="notas_record">
                                     
                                    
                                <?php  foreach ($typeEvaluations as $typeEvaluation): ?>
                                    <tr>
                                        <td><?php echo($typeEvaluation['DescripTipoEvaluacion']);?></th>
                                        <td><button class="btn btn-primary btn-lg btn-block" name='{"CodTipoEvaluacion":"<?php echo($typeEvaluation['CodTipoEvaluacion'] );?>","trimestre":"1","idCourse":"<?php echo($idCourse);?>","idStudent":"<?php echo($idStudent);?>"}' id="link" href="#"><?php echo round($typeEvaluation['Primer']);?></button></td>
                                        <td><button class="btn btn-primary btn-lg btn-block" name='{"CodTipoEvaluacion":"<?php echo($typeEvaluation['CodTipoEvaluacion'] );?>","trimestre":"2","idCourse":"<?php echo($idCourse);?>","idStudent":"<?php echo($idStudent);?>"}' id="link" href="#"><?php echo round($typeEvaluation['Segundo']);?></button></td>
                                        <td><button class="btn btn-primary btn-lg btn-block" name='{"CodTipoEvaluacion":"<?php echo($typeEvaluation['CodTipoEvaluacion'] );?>","trimestre":"3","idCourse":"<?php echo($idCourse);?>","idStudent":"<?php echo($idStudent);?>"}' id="link" href="#"><?php echo round($typeEvaluation['Tercero']);?></button></td>
                                    </tr>

                                

                                <?php endforeach ?>
                                </tbody>
                            </div>

                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                      
                                        <tr>
                                            <th>descripcion</th>
                                            <th>nota</th>
                                        </tr>
                                    </thead>
                                    <tbody id="notas_trimestral">
                                     
                                    </tbody>

                                </table>
                                </div>


                            </div>
                            <!-- /.panel-body -->


                        </div>
                        <!-- /.panel -->
                    </div>
                </div>

                