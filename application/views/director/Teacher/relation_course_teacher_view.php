   <div id="page-wrapper">
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">Relacionar profesor curso</h1>
        </div>
        <!-- /.col-lg-12 -->
    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <?php echo $fullNameTeacher; ?>
                </div>
                <div class="panel-body">

                    <div class="row">
                        <div class="col-lg-12">




                            <div class="form-group">
                                <label>Selecione el nivel</label>
                                <select onchange="getLevel(this)" class="form-control">
                                    <option value="P">primaria </option>
                                    <option value="S">secundaria </option>
                                </select>




                            </div>
                            <div  id="secundaria">
                                <form role="form" method="POST">

                                    <div class="table-responsive">
                                        <table class="table table-striped">
                                        <input type="hidden" name="idTeacher" value="<?php echo $idTeacher; ?>"></input>
                                        <input type="hidden" name="level" value="S"></input>
                                            <thead>
                                                <tr>
                                                    <th ><span>grado</span></th>
                                                    <th ><span>1</span></th>
                                                    <th ><span>2</span></th>
                                                    <th ><span>3</span></th>

                                                    <th ><span>4</span></th>
                                                    <th ><span>5</span></th>

                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php 
                                                    $CodCurso=0;
                                                foreach ($cousesHigh as $key => $couseHigh): ?>
                                                   <tr>
                                                       <td><?php echo $couseHigh['DescripCurso'] ;?></td>
                                                       <?php for ($i=0; $i < 5; $i++) :?>
                                                        <?php if (isset( $couseHigh['grades'][$i]['CodGrado'])):?>
                                                            <td><input name="<?php echo $CodCurso; ?>" <?php if($couseHigh['grades'][$i]['teach']=='TRUE'){echo 'checked';} ?> type="checkbox" value="<?php echo $couseHigh['grades'][$i]['CodCurso']; ?>"></td>    
                                                            <?php $CodCurso++; ?>
                                                        <?php else: ?>
                                                            <td></td>    
                                                        <?php endif ?>


                                                    <?php endfor ?>


                                                </tr>
                                            <?php endforeach ?>                       

                                            

                                        </tbody>
                                    </table>
                                </div>
                                <!-- /.table-responsive -->


                                <div class="form-group">
                                <input type="hidden" name="CodCurso" value="<?php echo $CodCurso; ?>"></input>
                                <button type="submit"  class="btn btn-primary">terminar</button>
                                </div>
                            </form>
                        </div>








                        <div class="col-lg-2" id="primaria">
                        <form role="form" method="POST">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                <input type="hidden" name="idTeacher" value="<?php echo $idTeacher; ?>"></input>
                                <input type="hidden" name="level" value="P"></input>
                                    <thead>
                                        <tr>
                                            <th ><span>grado</span></th>
                                            <th ><span>First Name</span></th>

                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $CodGrado=0;
                                        foreach ($gradesprimary as $key => $gradeprimary): ?>
                                           <tr>
                                            <td> 
                                                <?php echo $key+1; ?>
                                            </td>

                                            <td><input name="<?php echo $CodGrado ;?>" type="checkbox" value="<?php echo $gradeprimary; ?>"></td>
                                            <?php $CodGrado++; ?>
                                        </tr>
                                    <?php endforeach ?>

                                    
                                </tbody>
                            </table>
                        </div>
                        <div class="form-group">
                        <input type="hidden" name="CodGrado" value="<?php echo $CodGrado; ?>"></input>
                            <button type="submit"  class="btn btn-primary">terminar</button>
                        </div>
                        </form>
                    </div>           











                </div>
                <!-- /.col-lg-6 (nested) -->
                <!-- /.col-lg-6 (nested) -->
            </div>
            <!-- /.row (nested) -->
        </div>
        <!-- /.panel-body -->
    </div>
    <!-- /.panel -->
</div>
<!-- /.col-lg-12 -->
</div>
<!-- /.row -->
</div>
<!-- /#page-wrapper -->
