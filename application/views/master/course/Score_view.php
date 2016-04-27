   <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Lógico Matemático</h1>
        </div>
        <!-- /.col-lg-12 -->             
    </div>
    <!-- /.row -->

    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">                                
                  <?php  echo str_replace('_',' ',urldecode($DescripTipoEvaluacion))  ;?>
              </div>
              <!-- /.panel-heading -->
              <div class="panel-body">

                  <form role="form"  method="post" onkeypress="return anular(event)">


                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Agregar nota
                            <a id="icol" visibility="hidden" title="Agregar" class="btn btn-primary" role="button"><i class="glyphicon glyphicon-check"></i></a>
                            <input id="col" placeholder="Ingrese nombre de nota"/>

                            <button type="submit" class="btn btn-primary">Grabar</button>
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table" id="notas">
                                    <thead>
                                        <tr>
                                            <th>nombre_completo</th>

                                            <?php
                                         
                                                  $CountDescripEvaluacion=0;
                                             foreach ($Evaluations[0]['Notas'] as $criterios) {
                                                $CountDescripEvaluacion++;
                                                ?>
                                                <th><?php echo  strtolower($criterios['DescripEvaluacion']);?></th>

                                                <?php }?> 
                                                  
                                            </tr>

                                            <input type="hidden" id="criterios" name="criterios" value="">

                                        </thead>
                                        <tbody>

                                        <?php
                                          $count=0;
                                         foreach ($Evaluations as $Evaluation) {
                                               ?>
                                               <tr class="gradeA" >
                                                <td id="<?php echo $Evaluation['CodEstudiante'];?>" class="center"><?php echo $Evaluation['NomEstudiante'];?> </td>
                                                <?php 
                                                foreach ($Evaluation['Notas'] as $score) {
                                                  $notas[$count]['codEstudiante']=$Evaluation['CodEstudiante'];
                                                  $notas[$count]['descripEvaluacion']=$score['DescripEvaluacion'];//
                                                  $notas[$count]['idEvaluacion']=$score['IdEvaluacion'];//
                                                  $notas[$count]['nota']=$score['Nota'];//
                                                   ?>
                                                   <td class="center" padding="5px"> 
                                                        <input class="form-control" value="<?php echo $score['Nota'];?>" min="1" max="20" onkeypress="return isNumberKey(event)" name="<?php echo ''.$score['IdEvaluacion'];?>" required> 

                                                   </td>
                                                 <?php
                                                  $count++;
                                                  }?>   

                                               </tr>
                                               <?php }?> 
                                           </tbody>
                                           <input type="hidden" id="evaluaciones" name="evaluaciones" value='<?php echo json_encode($notas);?>'>
                                          
                                       </table>
                                   </div>
                                   <!-- /.table-responsive -->
                               </div>
                               <!-- /.panel-body -->
                           </div>

                           <button type="submit" class="btn btn-primary">Grabar</button>
                       </form>

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
