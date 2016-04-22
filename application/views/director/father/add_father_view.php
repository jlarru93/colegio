        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registrar Apoderado</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            ingrese informacion basica del apoderado
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <form role="form" method="post" action="<?php echo base_url() ;?>/Director/Father/add" onsubmit="return Validate(this);">
                                       <div class="form-group">
                                        <label>dni</label>
                                        <input name="dni" onKeyDown="if(this.value.length==8) return false;" class="form-control" type="number" maxlength="9"  required>

                                    </div>
                                    <div class="form-group">
                                        <label>Nombres</label>
                                        <input name="names" class="form-control" required>                                           
                                    </div>
                                    <div class="form-group">
                                        <label>Apellido paterno</label>
                                        <input name="father_last_name" class="form-control" required>

                                    </div>
                                    <div class="form-group">
                                        <label>Apellido materno</label>
                                        <input name="mother_last_name" class="form-control"  required>

                                        <div class="form-group">
                                            <label>direccion</label>
                                            <input name="address_street" class="form-control"  required>
                                        </div>
                                        <div class="form-group">
                                            <label>telefono</label>
                                            <input name="cellphone" onKeyDown="if(this.value.length==9) return false;" class="form-control" type="number" maxlength="9"  required>
                                            
                                        </div>
                                        <div class="form-group">
                                            <label>Sexo</label>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="sex" id="optionsRadios1" value="M" checked>Masculino
                                                </label>
                                            </div>
                                            <div class="radio">
                                                <label>
                                                    <input type="radio" name="sex" id="optionsRadios2" value="F">Femenina
                                                </label>
                                            </div>

                                        </div>
                                        <div class="form-group">




                                            <label>Fecha nacimiento</label>
                                            <div class="input-group date">
                                                <input type="text" class="datepicker form-control" name="date" required readonly="">
                                                <div class="input-group-addon">
                                                <span class="glyphicon glyphicon-th"></span>
                                                </div>
                                            </div>                                    
                                        </div> 


                                        <div class="form-group">
                                            <label>Foto</label>

                                            <input type='file' accept="image/*" id="imgInp" />
                                            <img id="blah" src="#" alt="your image" width="200px"  height="200px" />                                           
                                        </div> 
                                    </div>




                                    <button type="submit" class="btn btn-default">Submit Button</button>
                                    <button type="reset" class="btn btn-default">Reset Button</button>
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
