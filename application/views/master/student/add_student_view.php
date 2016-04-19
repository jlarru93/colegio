        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registrar Alumno</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            ingrese informacion basica del estudiante
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="<?php echo base_url() ;?>Student/add_student">
                                        <div class="form-group">
                                            <label>Nombres</label>
                                            <input class="form-control" name="name_student" required>
                                           
                                        </div>
                                        <div class="form-group">
                                            <label>Apellido paterno</label>
                                            <input class="form-control" name="last_name" required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Apellido materno</label>
                                            <input class="form-control" name="mother_last_name"  required>
                                        <div class="form-group">
                                            <label>Fecha nacimiento</label>
                                           <input class="datepicker" type="text" name="Birthdate" dateFormat: 'dd-mm-yyyy' required>
                                          
                                        </div> 
                                        <div class="form-group">
                                            <label>Sexo</label>
                                           <select class="form-control" name="gender">
                                                <option value="M">Masculino</option>
                                                <option value="F">Femenino</option>
                                            </select>
                                          
                                        </div> 
                                        <div class="form-group">
                                            <label>Dni</label>
                                           <input class="form-control" name="dni"  required>
                                          
                                        </div> 

                                    
                                   
                                        <button type="submit" class="btn btn-default">Registrar</button>
                                        <button type="reset" class="btn btn-default">Limpiar datos</button>
                                    </form>
                                </div>  
                               
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
