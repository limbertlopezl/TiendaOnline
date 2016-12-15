<?php
  session_start();
   $srcImg=base64_decode($_REQUEST['src']);
  // echo $srcImg;
?>

<!DOCTYPE html>

<html lang="en">

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
  <script src="assets/js/jquery.min.js"></script>

  

  <!-- Script para meme genarator -->
    <script src="assets/plugins/memegenerator/src/js/jquery-1.11.3.min.js"></script>
    <script src="assets/plugins/memegenerator/src/js/jquery-ui.min.js"></script>
    <script src="assets/plugins/memegenerator/colorpicker/spectrum.js"></script>
    <script type="text/javascript" src="assets/plugins/memegenerator/src/js/jquery.memegenerator.js"></script>
     <!-- Link de memeGenerator -->
   <link rel="stylesheet" type="text/css" href="assets/plugins/memegenerator/src/css/jquery.memegenerator.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/memegenerator/colorpicker/spectrum.css">
    <link rel="stylesheet" type="text/css" href="assets/plugins/memegenerator/src/css/jquery-ui.css">
  
   <style>
   
    .example {
      margin: 0 0 10% 0;
    }
    
    .bootstrap {
      width: 600px;
      margin-right: auto;
      margin-left: auto;
    }
    
    .save button {
      display: block;
      width: 100%;
      margin-bottom: 15px;
      font-size: 24px;
    }
    
    #preview {
      min-height: 200px;
      background-color: #EFEFEF;
    }
    #preview img {
      max-width: 100%;
    }
    </style>
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

          <!-- sidebar menu -->
            <?php   include'includes/menu.php';  ?>
          <!-- /sidebar menu -->

          <!-- /menu footer buttons -->
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

      <!-- top navigation -->
      <div class="top_nav">

        <div class="nav_menu">
          <nav class="" role="navigation">
            <div class="nav toggle">
              <a id="menu_toggle"><i class="fa fa-bars"></i></a>
            </div>

            <ul class="nav navbar-nav navbar-right">
              <li class="">
                <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                  <img src="assets/images/img.jpg" alt="">John Doe
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

      <!-- page content -->
      <div class="right_col" role="main">

        <div class="">
          <div class="page-title">           
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
                        <a href="#" class="done">
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
                        <a href="#step-3" class="selected">
                          <span class="step_no">3</span>
                          <span class="step_descr">
                                            Paso 3<br />
                                            <small>Agregue los textos que desea a su oferta</small>
                                        </span>
                        </a>
                      </li>                      
                    </ul>



                    <div id="step-1">                       
                     
                       <br>
                    </div>

                    <div id="step-2">                     
                       
                    </div>
                    <div id="step-3">                    
                        <div class="example bootstrap">                           
                            <img src="<?php echo $srcImg ?>" id="prueba">

                            <div class="container">
                              <div class="row">                         
                                 
                                <div class="col-md-8">
                                  <button class="btn btn-success" id="save">Terminar</button>
                                  <button class="btn btn-danger" id="download">Descargar</button>
                                 
                                </div>
                              </div>
                            </div>
                        </div>  

                        <script>   
        
                            $(".example.bootstrap img").memeGenerator({
                              useBootstrap: true,
                            }); 
                            
                            $("#save").click(function(e){
                              e.preventDefault();
                              var description= "RegistrarImagen";
                              var imageDataUrl = $("#prueba").memeGenerator("save");
                              
                             $.ajax({
                                  url: "../Controlador/C_Oferta.php",
                                  type: "POST",
                                  data: {image: imageDataUrl,"Descripcion":description},
                                  dataType: "json",
                                  success: function(response){
                                    document.location.href='../Vista/V_Oferta.php';
                                }
                           });

                            });
                            
                            $("#download").click(function(e){
                              e.preventDefault();
                              
                              $("#prueba").memeGenerator("download");
                            });
        
                          //
                      </script>
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
      <!-- /page content -->
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
 

</body>

</html>
