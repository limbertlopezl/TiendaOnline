<!DOCTYPE html>
<html lang="en">
 <?php session_start(); ?>
<head>
  
   <!-- Incluira ek titulo-->
            <?php   include'includes/titulo.php';  ?>
    <!-- TITULO FIN -->
  <!-- Bootstrap core CSS -->

  <link href="assets/css/bootstrap.min.css" rel="stylesheet">

  <link href="assets/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="assets/css/custom.css" rel="stylesheet">
  <link href="assets/css/icheck/flat/green.css" rel="stylesheet">
  <link href="assets/plugins/file-input/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
  <script src="assets/js/jquery.min.js"></script>


 
 
   <!-- fin  plugins para rotar imagen -->
  
 
  <!--[if lt IE 9]>
        <script src="../assets/js/ie8-responsive-file-warning.js"></script>
        <![endif]-->

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!--[if lt IE 9]>
          <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
          <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

</head>


<body class="nav-md">

  <div class="container body">


    <div class="main_container">

      <div class="col-md-3 left_col">
        <div class="left_col scroll-view">
 <!-- Incluira ek informacion-->
            <?php   include'includes/informacion.php';  ?>
          <!-- informacion FIN -->
          <!-- /menu prile quick info -->

          <br />

          <!-- sidebar menu Opciones del menu-->
         <?php   include'includes/menu.php';  ?>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons Botones de Abajo  -->
          <div class="sidebar-footer hidden-small">
            <a data-toggle="tooltip" data-placement="top" title="Settings">
              <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="FullScreen">
              <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Lock">
              <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
            </a>
            <a data-toggle="tooltip" data-placement="top" title="Logout">
              <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
            </a>
          </div>
          <!-- /menu footer buttons -->
        </div>
      </div>


      <!-- top navigation  Lado de las Notificacionbes-->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="assets/images/img.jpg" alt="">Limbert Lopez
                  <span class=" fa fa-angle-down"></span>
                </a>
                <ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
                  <li><a href="javascript:;">  Profile</a>
                  </li>
                  <li>
                    <a href="javascript:;">
                      <span class="badge bg-red pull-right">50%</span>
                      <span>Settings</span>
                    </a>
                  </li>
                  <li>
                    <a href="javascript:;">Help</a>
                  </li>
                  <li><a href="login.html"><i class="fa fa-sign-out pull-right"></i> Log Out</a>
                  </li>
                </ul>
              </li>

              <li role="presentation" class="dropdown">
                <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                  <i class="fa fa-envelope-o"></i>
                  <span class="badge bg-green">6</span>
                </a>
                <ul id="menu1" class="dropdown-menu list-unstyled msg_list animated fadeInDown" role="menu">
                  <li>
                    <a>
                      <span class="image">
                                        <img src="assets/images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="assets/images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="assets/images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <a>
                      <span class="image">
                                        <img src="assets/images/img.jpg" alt="Profile Image" />
                                    </span>
                      <span>
                                        <span>John Smith</span>
                      <span class="time">3 mins ago</span>
                      </span>
                      <span class="message">
                                        Film festivals used to be do-or-die moments for movie makers. They were where...
                                    </span>
                    </a>
                  </li>
                  <li>
                    <div class="text-center">
                      <a>
                        <strong>See All Alerts</strong>
                        <i class="fa fa-angle-right"></i>
                      </a>
                    </div>
                  </li>
                </ul>
              </li>

            </ul>
          </nav>
        </div>

      </div>
      <!-- /top navigation -->


      <!-- page content Inicio del Contenido General-->
      
      <div class="right_col" role="main">

        <div class="">

          <div class="page-title">
            <div class="title_left">
              <h3>Titulo</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Buscadoe</button>
                        </span>
                </div>
              </div>
            </div>
          </div>   
          <!-- Fin de la Cabezera del Buscador-->

          <div class="clearfix"></div>

           <!-- Contenido Principal del Contenedor de la pagina-->

          <div class="row
             <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title" >
                  <h2>GESTIONAR CATALOGO <small>LISTADO</small></h2>

                  
                  <ul class="nav navbar-right panel_toolbox">
                       <a style="background:transparent;"><label for="Registrar">
                    <img src="assets/images/sistema/save.png" width="45" height="45">
                </a>       

                  <a style="background:transparent;" href="php.php">
                    <img src="assets/images/sistema/delete.png" width="45" height="45"></label>
                </a>                    
                  </ul>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">      
                
                    <form method="POST" id="formulario" name="formulario" action="../Controlador/C_Catalogo.php" class="form-horizontal col-xs-12" enctype="multipart/form-data">                      

                          <!-- Nombre -->
                      <div  class="form-group">
                          <label  class="col-sm-2 control-label semi-bold" for="Nombre">Nombre Catalogo</label>
                          <div class="col-sm-8">
                            <input name="Nombre" id="Nombre" type="text" class="form-control" placeholder="Nombre"required="required" autofocus="autofocus" >
                          </div>                            
                      </div>

                      <!-- Descripcion -->
                      <div  class="form-group">
                          <label  class="col-sm-2 control-label semi-bold" for="Descripcion">Descripcion</label>
                          <div class="col-sm-8">
                            <input name="Descripcion" id="Descripcion" type="text" class="form-control" 
                            placeholder="Descripcion" required="required">
                          </div>                            
                      </div>
                        <!-- Fecha Inicio -->
                      <div  class="form-group">
                          <label  class="col-sm-2 control-label semi-bold" for="FechaFin">Fecha Fin</label>
                          <div class="col-sm-8">
                            <input name="FechaFin" id="FechaFin" type="Date" class="form-control" 
                            placeholder="FechaFin" required="required">
                          </div>                            
                      </div>
       
                          <!-- Portada -->
                       <div class="form-group" >
                        <label  class="col-sm-2 control-label semi-bold" for="Descripcion">Imagen Portada</label>
                           <div class="col-sm-8">
                              <input id="fileupload" name="PortadaCatalogo" type="file" class="file" accept="image/jpeg" data-show-upload="false" >                           
                            </div>    
                        </div>
                         <input  type="submit"  class="hidden" name="Registrar" 
                      value="Registrar" id="Registrar" /> 

                   </form> 

                </div>
              </div>
            </div>





             <!-- Fin de la Cabezera del Contenedor de la pagina -->
          </div>
        </div>

        <!-- footer content -->
        <footer>
          <div class="copyright-info">
            <p class="pull-right">Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
            </p>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>

      <!-- /page content Fin del contenido General -->
    </div>

  </div>

  <div id="custom_notifications" class="custom-notifications dsp_none">
    <ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
    </ul>
    <div class="clearfix"></div>
    <div id="notif-group" class="tabbed_notifications"></div>
  </div>

  <script src="assets/js/bootstrap.min.js"></script>

  <!-- bootstrap progress js -->
  <script src="assets/js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="assets/js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="assets/js/icheck/icheck.min.js"></script>
  <script src="assets/js/custom.js"></script>
  <script src="assets/plugins/file-input/js/fileinput.min.js" type="text/javascript"></script> 
 
  <!-- dropzone --> 
</body>

</html>
