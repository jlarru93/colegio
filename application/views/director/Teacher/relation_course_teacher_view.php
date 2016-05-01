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
                            formulario para relacionar un profesor con un curso
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
                            <form role="form">
                                <div class="table-responsive">
                                    <table class="table table-striped">
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
                                       <tr>
                                            <td> 
                                               2
                                            </td>
                                            <td>

                                            </td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td><input type="checkbox" value=""></td>
                                        </tr>
                                  
                                       
                                    
                                    </tbody>
                                </table>
                            </div>
                            <!-- /.table-responsive -->
                                       
                                  
                                        <div class="form-group">
                                            <button type="submit" onclick="mostrar()" class="btn btn-primary">terminar</button>
                                        </div>
                                    </form>
                                    </div>
                                              







    <div class="col-lg-2" id="primaria">
    <div class="table-responsive">
                                    <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th ><span>grado</span></th>
                                            <th ><span>First Name</span></th>
                                           
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td> 
                                                1
                                            </td>
                                           
                                            <td><input type="checkbox" value=""></td>
                                        </tr>
                                          <tr>
                                            <td> 
                                               2
                                            </td>
                                            
                                            <td><input type="checkbox" value=""></td>                                        </tr>
                                          <tr>
                                            <td>3</td>
                                            <td><input type="checkbox" value=""></td>
                                        </tr>
                                    
                                    </tbody>
                                </table>
                            </div>
 <div class="form-group">
                                            <button type="submit" onclick="ocultar()" class="btn btn-primary">terminar</button>
                                        </div>
                            <!-- /.table-responsive -->
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
