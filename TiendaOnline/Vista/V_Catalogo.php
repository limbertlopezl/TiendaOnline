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

  <!-- Incluira  -->

  <link href="assets/css/bootstrap.css" rel="stylesheet">
  <link href="assets/fonts/css/font-awesome.min.css" rel="stylesheet">
  <link href="assets/css/animate.min.css" rel="stylesheet">

  <!-- Custom styling plus plugins -->
  <link href="assets/css/custom.css" rel="stylesheet">
  <link href="assets/css/icheck/flat/green.css" rel="stylesheet"> 
  <script src="assets/js/jquery.min.js"></script>

 <!-- CSS PARA VISUALIZAR CATALOGOS -->
  <link rel="stylesheet" type="text/css" href="assets/BookPreview/css/normalize.css" />                      
 
  <link rel="stylesheet" type="text/css" href="assets/BookPreview/css/bookblock.css" />
  <link rel="stylesheet" type="text/css" href="assets/BookPreview/css/component.css" />
 <!-- JS PARA VISUALIZAR CATALOGOS -->
 <script src="assets/BookPreview/js/modernizr.custom.js"></script>

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


      <!-- topnavigation  Lado de las Notificacionbes-->
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
                <div class="x_title">
                  <h2>GESTIONAR CATALOGO :<small>LISTADO</small></h2>
                  <ul class="nav navbar-right panel_toolbox">
                      <a style="background:transparent;" href="V_Catalogo_Agregar.php">
                       <img src="assets/images/sistema/agregar_cliente.png" width="60" height="60">
                       </a>            
                  </ul>
                  <div class="clearfix"></div>
                </div>

                  <div class="x_content">
                    <div id="scroll-wrap" class="container_figure">
                      <div class="main">
                        <div id="bookshelf" class="bookshelf">
                         <!-- INICIO DE PORTADA REVISTA 1 -->
                          <?php while ($rowCatalogo = mysqli_fetch_array($resultadoCatalogo,MYSQLI_ASSOC)) {  
                          $img=$rowCatalogo['portada']; ?>
                             
                              <?php echo'<style type="text/css">                                
                                .no-csstransforms3d .book[data-book="book-'.$c.'"],
                                .no-js .book[data-book="book-'.$c.'"],
                                .book[data-book="book-'.$c.'"] .front {
                                    background: url('.$img.');
                                    background: -webkit-linear-gradient(left, rgba(0, 0, 0, 0.1) 0%, rgba(211, 211, 211, 0.1) 5%, rgba(255, 255, 255, 0.15) 5%, rgba(255, 255, 255, 0.1) 9%, rgba(0, 0, 0, 0.01) 100%), url('.$img.'), #ea2130;
                                    background: linear-gradient(to right, rgba(0, 0, 0, 0.1) 0%, rgba(211, 211, 211, 0.1) 5%, rgba(255, 255, 255, 0.15) 5%, rgba(255, 255, 255, 0.1) 9%, rgba(0, 0, 0, 0.01) 100%), url('.$img.'), #ea2130;}                                    
                                .book[data-book="book-'.$c.'"] .inner { border-color: #ea2130 }
                                .book[data-book="book-'.$c.'"] .cover::before {
                                    background: url('.$img.');
                                    background: -webkit-linear-gradient(left, transparent 0%, rgba(0, 0, 0, 0.01) 1%, rgba(0, 0, 0, 0.1) 50%, transparent 100%), url('.$img.'), #ea2130;
                                    background: linear-gradient(to right, transparent 0%, rgba(0, 0, 0, 0.01) 1%, rgba(0, 0, 0, 0.1) 50%, transparent 100%), url('.$img.'), #ea2130;}                                   
                                    #book-'.$c.' { border-color: #ea2130 }
                            </style>'?>
                           

                            <?php echo'<figure id="figura" class="">
                                    <div class="book" data-book="book-'.$c.'"></div>
                                    <div class="buttons"><a href="#">Ver Catalogo</a><a href="#">Detalles</a></div>
                                    <figcaption><h2>'.$rowCatalogo['nombre'].'<span>'.$rowCatalogo['tienda'].'</span></h2></figcaption>
                                    <div class="details">
                                      <ul>
                                        <li>'.$rowCatalogo['descripcion'].'</li>
                                        <li>Inicio: '.$rowCatalogo['fechaInicio'].'</li>
                                        <li>Fin: '.$rowCatalogo['fechaFinal'].'</li>
                                        <li>'.$rowCatalogo['Paginas'].'  Paginas</li>
                                      </ul>
                                    </div>
                                   </figure>
                                  '?>
                            <?php $c++;} ?>
                           <!-- FIN DE PORTADA REVISTA ! -->       
                        </div>

                      </div>
                    </div><!-- scroll-wrap /container --> 

                          <!-- Fullscreen BookBlock -->
                        <!-- for demo purpose we repeat each bookblock -->

                      <div class="bb-custom-wrapper" id="book-1">
                        <div class="bb-bookblock">                         
                           <!-- Pagina 1 -->
                           <div class="bb-item">
                            <div class="bb-custom-side page-layout-1">
                              <img src="http://localhost:8080/TiendaOnline/Vista/Productos/1CatalogoCompleto/00021.jpg">
                            </div>
                            <div class="bb-custom-side page-layout-1" >
                             
                               <h3>Descuentos del 10%</h3> 
                               <br><br><br><br>
                               <h3>Descuentodfds del 10%</h3> 
                               <h3>Descuentos ddfel 10%</h3> 
                                                           
                            </div>
                          </div>
                          <!-- Fin Pagina 1 -->
                        </div><!-- /bb-bookblock -->
                        <nav>
                          <a href="#" class="bb-nav-prev">Previous</a>
                          <a href="#" class="bb-nav-next">Next</a>
                          <a href="#" class="bb-nav-close" onclick="javascript:CambiarEstilo();" >Close</a>
                        </nav>
                      </div><!-- /bb-custom-wrapper -->                        


                      <!-- fin del contenedor general !-->
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
   <script>
              function CambiarEstilo() {              
                     
                $("#figura").removeClass("close");
               
                                   
              }
                  
       </script>

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
   <!-- JS PARA VISUALIZAR CATALOGOS -->
<script src="assets/BookPreview/js/bookblock.min.js"></script>
<script src="assets/BookPreview/js/classie.js"></script>
<script src="assets/BookPreview/js/bookshelf.js"></script> 

</body>

</html>
