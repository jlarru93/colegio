   <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Relacionar alumno con apoderado</h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            formulario para relacionar apoderado con alumno
                        </div>
                        <div class="panel-body">

                            <div class="row">
                                <div class="col-lg-6">
                                    <h1>informacion del apoderado</h1>
                                    <form role="form">
                                      <div class="form-group">
                                            <label>dni apoderado</label>
                                            <input class="form-control">
                                            <p class="help-block">ingrese el dni y consulte antes de hacer la relacion alummno apoderado.</p>
                                            <a href="<?php echo site_url('Director/student/add_student'); ?>" class="btn btn-primary" role="button">Consultar</a>          
                                        </div>
                                        <fieldset disabled>
                                            <div class="form-group">
                                                <label for="disabledSelect">nombres del apoderado</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>
                                            </div>
                                            <div class="form-group">
                                                <label for="disabledSelect">apellidos del apoderado</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>
                                            </div>                                            
                                        </fieldset>
                                        <div class="form-group">
                                        <label>parentesco</label>
                                            <select class="form-control">
                                                <option>Padre</option>
                                                <option>Madre</option>
                                                <option>Abuelo(a)</option>
                                                <option>Hermano(a)</option>
                                                <option>Tio(a)</option>
                                                <option>Primo(a)</option>
                                                <option>Vecino(a)</option>
                                            </select>

                                        </div>
                                        <div class="form-group">
                                            <button type="submit" disabled class="btn btn-primary">terminar</button>
                                        </div>
                                    </form>
                                                                  
                                </div>
                                <!-- /.col-lg-6 (nested) -->
                                <div class="col-lg-6">
                                       <div class="form-group">
                                                <label for="disabledSelect">nombres del alumno</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>
                                        
                                                <label for="disabledSelect">apellidos del alumno</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>
                                 
                                                <label for="disabledSelect">fecha de nacimiento</label>
                                                <input class="form-control" id="disabledInput" type="text" placeholder="Disabled input" disabled>
                                    </div>  
                                </div>
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
