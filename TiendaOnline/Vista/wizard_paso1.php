<!DOCTYPE html>
<html lang="en">

<?php

session_start();
$idTienda=$_SESSION['idTienda'];
require("../Modelo/M_Catalogo.php");    //Metodo cargar lista de clientes.
$md=new Catalogo();
$resultadoCatalogo=$md->Listar($idTienda);
$c=1;  

?>
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
           
          </div>
          <div class="clearfix"></div>

          <div class="row">

            <div class="col-md-12 col-sm-12 col-xs-12">
              <div class="x_panel">

                <div class="x_title">
                  <h2>Form Wizards <small>Sessions</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                    <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                    </li>
                    <li class="dropdown">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                      <ul class="dropdown-menu" role="menu">
                        <li><a href="#">Settings 1</a>
                        </li>
                        <li><a href="#">Settings 2</a>
                        </li>
                      </ul>
                    </li>

                    <li><a class="close-link"><i class="fa fa-close"></i></a>
                    </li>
                  </ul>
                  <div class="clearfix"></div>
                </div>
                <div class="x_content">



                  <!-- Smart Wizard -->

                  <p>Sigue estos pasos para creear tu promocion personalizado.</p>
                  <div id="wizard" class="form_wizard wizard_horizontal">
                    <ul class="wizard_steps">
                      <li>
                        <a href="#" class="selected">
                          <span class="step_no">1</span>
                          <span class="step_descr">
                                            Paso 1<br />
                                            <small>Selecciona una Imagen</small>
                                        </span>
                        </a>
                      </li>
                      <li>

                        <a href="wizard_paso2.php" class="done" for="enviar">

                          <span class="step_no" >2</span>
                          <span class="step_descr" >
                                            Paso 2<br />
                                            <small >Agregar las figuras que deseas.</small>
                                        </span>
                        </a>
                      </li>
                      <li>
                        <a href="#step-3" class="done">
                          <span class="step_no">3</span>
                          <span class="step_descr">
                                            Paso 3<br />
                                            <small>Step 3 description</small>
                                        </span>
                        </a>
                      </li>                    
                    </ul>



                    <div id="step-1">   
                     
                      <form  action="wizard_paso2.php" method="post" class="file form-horizontal col-xs-12" enctype="multipart/form-data">
                        <br>                               

                            <!-- Lista catalogo -->
                      <div  class="form-group">
                          <label  class="col-sm-2 control-label semi-bold" for="Catalogo"  >Catalogo</label>
                          <div class="col-sm-8">
                          <select name="Catalogo" id="Catalogo"  >
                            <?php 
                            while ($rowCatalogo = mysqli_fetch_array($resultadoCatalogo,MYSQLI_ASSOC)) 
                            { 
                            echo "<option value=".$rowCatalogo['idCatalogo'].">".$rowCatalogo['nombre']."</option>\n";
                            } 
                            ?>                           
                          </select>                         
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

                          <div class="form-group">                          
                            <input id="fileupload" name="imagen" type="file" class="file" accept="image/jpeg" data-show-upload="false" >    <input type='submit' class="hidden" id="enviar" name="enviar" value="enviar" /> 
                          </div>                               
                      </form>

                      
                    </div>

                    <div id="step-2">                     
                       
                    </div>
                    <div id="step-3">
                    
                    </div>                   
                    <div class="actionBar"> 
                   <label class="btn btn-success" for="enviar">Siguiente</label>
                    <label class="btn btn-primary buttonDisabled">Atras</label>
                         <!-- 
                     <a class="btn btn-success"><label for="enviar">Enviar</label></a>
                    <a href="#" class="btn btn-primary buttonDisabled"><label for="enviar">Atras</label></a>
                    End SmartWizard Content -->

                    </div>
                  </div>
                  <!-- End SmartWizard Content -->
                
                  <!-- End SmartWizard Content -->


                </div>
              </div>
            </div>

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
  <!-- form wizard -->
  <script type="text/javascript" src="assets/js/wizard/jquery.smartWizard.js"></script>
  <!-- dropzone -->
 
 <script src="assets/plugins/file-input/js/fileinput.min.js" type="text/javascript"></script> 


  

</body>

</html>
