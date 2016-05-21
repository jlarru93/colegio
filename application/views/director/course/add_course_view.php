        <div id="page-wrapper">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">Registrar Curso</h1>
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
                                    <form role="form" method="POST">
                                        <div class="form-group">
                                            <label>Nombre</label>
                                            <input name="descripCurso" class="form-control" required>
                                           
                                        </div>
                                         <div class="form-group">
                                            <label>nivel</label>
                                            <select name="nivel" class="form-control">
                                                <option value="P">primaria</option>
                                                <option value="S">secundaria</option>
                                             </select>
                                        </div>
                                        <div class="form-group">
                                            <label>Grado</label>
                                            <select name="grade" class="form-control">
                                                <option value="1">1</option>
                                                <option value="2">2</option>
                                                <option value="3">3</option>
                                                <option value="4">4</option>
                                                <option value="5">5</option>
                                                <option value="6">6</option>
                                            </select>
                                        </div>

                                        <button type="submit" class="btn btn-primary">Agregar</button>
                                        
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
