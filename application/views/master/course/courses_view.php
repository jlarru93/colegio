<div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Aulas
                
            </h1>
            
        </div>
        
        
        
        <!-- /.col-lg-12 -->
    </div>


    
    
    <!-- /.col-lg-12 -->
    
    <!-- /.row -->
    
   <div class="row">
       <?php foreach ($courses as $course) { 


        $course_name=str_replace('+','_',urlencode($course['DescripCurso']));
        $link=site_url('Master/Course/typeEvaluation/'.$course['CodCurso'].'/'.$idsection.'/'.$course_name);
        ?>
       <div class="col-lg-3 col-md-6">
           <a href="<?php echo  $link ; ?>">
            <div class="panel panel-green">
                <div class="panel-heading">
                    <div class="row">
                        <div class="col-xs-3">
                            <i class="glyphicon glyphicon-book fa-5x"></i>
                        </div>
                        <div class="col-xs-9 text-right">
                            <div class="huge"><?php //" echo $course['CodCurso']";?></div>
                            
                        </div>
                    </div>
                </div>
               
                    <div class="panel-footer">
                        <span class="pull-left"><?php echo $course['DescripCurso'];?></span>
                        <span class="pull-right"><i class="fa fa-arrow-circle-right"></i></span>
                        <div class="clearfix"></div>
                    </div>
                </a>
            </div>
        </a>
    </div>
    <?php } ?>
    
    
    

    <!-- /.row -->
    
</div>
<!-- /.row -->
</div>
        <!-- /#page-wrapper -->