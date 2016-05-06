     

        <!-- Navigation -->
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="index.html">Colegio 5130</a>
            </div>
            <!-- /.navbar-header -->
   
    
            <ul class="nav navbar-top-links navbar-right"  >

                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-bell fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-messages scrollable-menu" role="menu">
                    <?php if ($notificaions): ?>
                           <?php foreach ($notificaions as $key => $value): ?>
                        <li >                                               
                            <a href="#<?php echo($value['IdEvaluacion']); ?>">
                                <div>
                                
                                    <strong>John Smith</strong>
                                    <span class="pull-right text-muted">
                                        <em>Yesterday</em>
                                    </span>
                                </div>
                                <div><?php echo($value['Mensaje']); ?></div>
                                 <span class="pull-right text-muted small"><?php
$datetime1 = new DateTime($value['FechaNotificacion']);
$datetime2 = new DateTime("now");
$interval = $datetime1->diff($datetime2);
echo $interval->format('hace %a días %H horas %I minutos'); ?></span>
                            </a>
                        </li>
                        <li class="divider"></li>
            <?php endforeach ?>
                    <?php else: ?>
                        <li >                                               
                            <a href="#">
                                <div>
                                
                                    <strong></strong>
                                    <span class="pull-right text-muted">
                                        <em></em>
                                    </span>
                                </div>
                                <div>No hay notificaciones</div>
                                 <span class="pull-right text-muted small">-</span>
                            </a>
                        </li>
                        
                    <?php endif ?>
                    
                      
                     
            

                        <li>
                            <a class="text-center" href="#">
                                <strong>Read All Messages</strong>
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </li>
                    </ul>
                    <!-- /.dropdown-messages -->
                </li>
         
                
                <!-- /.dropdown -->
               
                <!-- /.dropdown -->
         
                <!-- /.dropdown -->
                <li class="dropdown">
                    <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                        <i class="fa fa-user fa-fw"></i>  <i class="fa fa-caret-down"></i>
                    </a>
                    <ul class="dropdown-menu dropdown-user">
                      

                        <li><a href="#"><i class="fa fa-user fa-fw"></i> User Profile</a>
                        </li>

                  

                        <li><a href="#"><i class="fa fa-gear fa-fw"></i>seting</a>
                        </li>
                      

                        <li class="divider"></li>
                        <li><a href="login.html"><i class="fa fa-sign-out fa-fw"></i> Logout</a>
                        </li>
                    </ul>
                    <!-- /.dropdown-user -->
                </li>
                <!-- /.dropdown -->
            </ul>
            <!-- /.navbar-top-links -->

            <div class="navbar-default sidebar" role="navigation">
                <div class="sidebar-nav navbar-collapse">
                    <ul class="nav" id="side-menu">
                        <li class="sidebar-search">
                            <div class="input-group custom-search-form">
                                <input type="text" class="form-control" placeholder="buscar...">
                                <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                            </div>
                            <!-- /input-group -->
                        </li>
                        <li>
                            <a href="<?php echo site_url('father/student/index');?>"><i class="fa fa-dashboard fa-fw"></i> Mis Hijos</a>
                        </li>
                     
                        <li>
                            <a href="<?php echo site_url('father/student/index');?>"><i class="fa fa-table fa-fw"></i> notificaciones</a>
                        </li>
   
                    </ul>
                </div>
                <!-- /.sidebar-collapse -->
            </div>
            <!-- /.navbar-static-side -->
        </nav>