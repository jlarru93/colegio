<?php
$nameStudent=str_replace('_',' ',urldecode($nameStudent));
?>




<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Cursos</h1>

        </div>
        <!-- /.col-lg-12 -->

    </div>
    <!-- /.row -->

    
    <div class="panel panel-default">

        <div class="panel-heading">
            <?php  echo  $nameStudent ;?>
        </div>
        <div class="panel-body">

        <?php      //   print_r($courses[0]);           ?>
        <?php foreach ($courses as $course) { 
            
            $nameTeacher=$course['NombresProfesor'];
            $DescripCurso=$course['DescripCurso'];
            
            $link=site_url('father/course/typeEvaluation/'.$course['CodCurso'].'/'.$codstudent.'/'.str_replace('+','_',urlencode($nameStudent)).'/'.str_replace('+','_',urlencode($nameTeacher)).'/'.str_replace('+','_',urlencode($DescripCurso)));
            ?>
        <div class="col-lg-3 col-md-6">
           <a href="<?php echo $link; ?>">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                         <i class="fa fa-users fa-5x"></i>


                     </div>
                     <div class="col-xs-9 text-right">
                        <div class="huge"></div>
                        <div> <?php echo $nameTeacher;?></div>
                    </div>                                              

                </div>
            </div>

            <div class="panel-footer">
                <span class="pull-left"><?php echo $DescripCurso;?></span>
                <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                <div class="clearfix"></div>
            </div>

        </div>
    </a>
</div>




<?php } ?>


<!-- /.row -->

</div>
</div>
</div>
<!-- /.row -->
</div>
        <!-- /#page-wrapper -->