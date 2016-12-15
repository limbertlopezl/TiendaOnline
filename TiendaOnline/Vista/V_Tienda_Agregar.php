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

          <div class="navbar nav_title" style="border: 0;">
            <a href="index.html" class="site_title"><i class="fa fa-paw"></i> <span>Gentellela Alela!</span></a>
          </div>
          <div class="clearfix"></div>


          <!-- menu prile quick info -->
          <div class="profile">
            <div class="profile_pic">
              <img src="assets/images/img.jpg" alt="..." class="img-circle profile_img">
            </div>
            <div class="profile_info">
              <span>Welcome,</span>
              <h2>John Doe</h2>
            </div>
          </div>
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
      <?php   include'includes/top_navigation.php';  ?>
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

          <div class="row">
             <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">
                <div class="x_title" >
                  <h2>GESTIONAR TIENDA :<small>AGREGAR</small></h2>

                  
                  <ul class="nav navbar-right panel_toolbox">
                       <a style="background:transparent;"><label for="Registrar">
                    <img src="assets/images/sistema/save.png" width="45" height="45">
                </a>       

                  <a style="background:transparent;" href="V_Tienda.php">
                    <img src="assets/images/sistema/delete.png" width="45" height="45"></label>
                </a>                    
                  </ul>

                  <div class="clearfix"></div>
                </div>
                <div class="x_content">      
                    <form method="POST" id="formulario" name="formulario" action="../Controlador/C_Tienda.php" class="form-horizontal col-xs-12" enctype="multipart/form-data">

                            <!-- Comerciante -->
                      <div  class="form-group">
                          <label  class="col-sm-2 control-label semi-bold" for="Comerciante">Comerciante</label>
                          <div class="col-sm-8">
                            <input name="Comerciante" id="Comerciante" type="text" class="form-control" placeholder="Comerciante"required="required" autofocus="autofocus" >
                          </div>                            
                      </div>

                          <!-- Nombre -->
                      <div  class="form-group">
                          <label  class="col-sm-2 control-label semi-bold" for="Nombre">Nombre</label>
                          <div class="col-sm-8">
                            <input name="Nombre" id="Nombre" type="text" class="form-control" placeholder="Nombre"required="required" autofocus="autofocus" >
                          </div>                            
                      </div>                  

                             <!-- Descripcion -->
                        <div  class="form-group">
                            <label  class="col-sm-2 control-label semi-bold" for="Descripcion" >Descripcion</label>
                            <div class="col-sm-8">
                                  <input name="Descripcion" id="Descripcion" type="text" class="form-control" 
                                  placeholder="Descripcion" required="required">
                            </div>                            
                        </div> 

                            <!-- Telefono -->
                      <div  class="form-group">
                          <label  class="col-sm-2 control-label semi-bold" for="Telefono"  >Telefono</label>
                          <div class="col-sm-8">
                            <input name="Telefono" id="Telefono" type="text" class="form-control" 
                            placeholder="Telefono" required="required">
                          </div>                            
                      </div>
                          <!-- Direccion -->
                      <div  class="form-group">
                          <label  class="col-sm-2 control-label semi-bold" for="Direccion"  >Direccion</label>
                          <div class="col-sm-8">
                            <input name="Direccion" id="Direccion" type="text" class="form-control" 
                            placeholder="Direccion" required="required">
                          </div>                            
                      </div>


                       <!-- Horario -->
                      <div  class="form-group">
                          <label  class="col-sm-2 control-label semi-bold" for="Horario">HORARIO</label>
                          <div class="col-sm-8">
                            <input name="Horario" id="Horario" type="text" class="form-control" 
                            placeholder="Horario" required="required">
                          </div>                            
                      </div>

                       <!-- PAgina Web -->
                      <div  class="form-group">
                          <label  class="col-sm-2 control-label semi-bold" for="Web">WEB</label>
                          <div class="col-sm-8">
                            <input name="Web" id="Web" type="text" class="form-control" 
                            placeholder="Web" required="required">
                          </div>                            
                      </div>

                        <!-- Latitud y Longitud-->
                      <div  class="form-group">
                          <label  class="col-sm-2 control-label semi-bold" for="Latitud">LATITUD</label>
                          <div class="col-sm-2">
                            <input name="Latitud" id="Latitud" type="text" class="form-control" 
                            placeholder="Latitud" required="required">
                          </div>  

                          <label  class="col-sm-2 control-label semi-bold" for="Longitud">LONGITUD</label>
                          <div class="col-sm-2">
                            <input name="Longitud" id="Longitud" type="text" class="form-control" 
                            placeholder="Longitud" required="required">
                          </div>   
                           <div class="col-sm-2"> 
                          <label class="btn btn-success">Ver Mapa</label>    
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
 
  <!-- dropzone -->
 
  <?php 
  $rutaLinks="assets";
 echo "<link href='$rutaLinks/dataTable/style.css' type='text/css' rel='stylesheet'/>";
  echo "<link href='$rutaLinks/dataTable/media/css/jquery.dataTables.css' rel='stylesheet' type='text/css'/>";
  echo "<link href='$rutaLinks/plugins/datatables-responsive/css/datatables.responsive.css' rel='stylesheet' type='text/css' media='screen'>";
  echo "<script src='$rutaLinks/dataTable/media/js/jquery.js' type='text/javascript' language='javascript'></script>";
  echo "<script src='$rutaLinks/dataTable/media/js/jquery.dataTables.js' type='text/javascript' language='javascript'></script>";
  ?>

</body>

</html>
