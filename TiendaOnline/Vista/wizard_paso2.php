<?php
session_start();

$idCatalogo= $_POST['Catalogo'];
require("../Modelo/M_Catalogo.php");    //Metodo cargar lista de clientes.
$md=new Catalogo();
$resultadoCatalogo=$md->ObtenerCatalogo($idCatalogo);
$rowCatalogo = mysqli_fetch_array($resultadoCatalogo,MYSQLI_ASSOC);  


$nombreCatalogo =$rowCatalogo['nombre'];
$nombreCatalogo = str_replace(' ', '_',$nombreCatalogo);

$_SESSION['NombreCatalogo']=$nombreCatalogo;
$_SESSION['IdCatalogo']=$_POST['Catalogo'];
$_SESSION['DescripcionOferta']=$_POST['Descripcion'];
$_SESSION['FechaFin']=$_POST['FechaFin'];

$nombreTienda=$_SESSION['nombreTienda'];


$RUTA="Recursos/Tienda/".$nombreTienda."/".$nombreCatalogo."/";
$_SESSION['RutaCatalogo']=$RUTA;

$target_path =$RUTA;
$target_path = $target_path.basename( $_FILES['imagen']['name']); 
$nombreImagen=$target_path;
if(move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path)) {
 //echo "El archivo ". basename( $_FILES['imagen']['name']). " ha sido subido";
} else{
//echo "Ha ocurrido un error, trate de nuevo!";
}

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
  <link href="assets/plugins/file-input/css/fileinput.css" media="all" rel="stylesheet" type="text/css" />
 

   <!-- ccss para los emoticos-->
  <link type="text/css" href="assets/lib_emoticones/css/jquery.ui.theme.css" rel="stylesheet" />
  <link type="text/css" href="assets/lib_emoticones/css/jquery.ui.core.css" rel="stylesheet" />
  <link type="text/css" href="assets/lib_emoticones/css/jquery.ui.resizable.css" rel="stylesheet" />
  <link type="text/css" href="assets/lib_emoticones/css/jquery.ui.slider.css" rel="stylesheet" />
  <link type="text/css" href="assets/lib_emoticones/css/style_emotico.css" rel="stylesheet" />

 
   <!-- scrips para los emoticos -->
  <script type="text/javascript" src="assets/lib_emoticones/js/jquery.min.js"></script>
  <script type="text/javascript" src="assets/lib_emoticones/js/jquery-ui.min.js"></script>
  <script type="text/javascript" src="assets/lib_emoticones/js/json2.js"></script>
  
 
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
                        <a href="wizard_paso1.php" class="done">
                          <span class="step_no">1</span>
                          <span class="step_descr">
                                            Paso 1<br />
                                            <small>Selecciona una Imagen</small>
                                        </span>
                        </a>
                      </li>
                      <li>
                     
                        <a href="#" class="selected">
                          <span class="step_no" for="Enviar">2</span>
                          <span class="step_descr" for="Enviar">
                                            Paso 2<br />
                                            <small>Agregar las figuras que deseas.</small>
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
                     
                      </div>
                    <div id="step-2">                     
                        <div id="content_emotico">
                            <div id="background_emotico" class="background_emotico">              
                                <img id="obj_0" src="<?php echo $nombreImagen ?>" width="640" height="480"></img>
                            </div>
                            <div id="tools">
                            </div>
                            <div id="objects_emotico">
                                <div class="obj_item"><img id="obj_1" width="50" height="28" class="ui-widget-content" src="assets/lib_emoticones/elements/bowtie.png" alt="el"/></div>
                                <div class="obj_item"><img id="obj_2" width="50" height="19" class="ui-widget-content" src="assets/lib_emoticones/elements/mus1.png" alt="el"/></div>
                                <div class="obj_item"><img id="obj_3" width="50" height="30" class="ui-widget-content" src="assets/lib_emoticones/elements/beard.png" alt="el"/></div>
                                <div class="obj_item"><img id="obj_4" width="50" height="54" class="ui-widget-content" src="assets/lib_emoticones/elements/santa.png" alt="el"/></div>
                               <div class="obj_item"><img id="obj_5" width="50" height="18" class="ui-widget-content" src="assets/lib_emoticones/elements/glasses1.png" alt="el"/></div>
                                <div class="obj_item"><img id="obj_6" width="50" height="12" class="ui-widget-content" src="assets/lib_emoticones/elements/glasses2.png" alt="el"/></div>  
                                <div class="obj_item"><img id="obj_7" width="50" height="44" class="ui-widget-content" src="assets/lib_emoticones/elements/bruise.png" alt="el"/></div>
                                <div class="obj_item"><img id="obj_8" width="50" height="24" class="ui-widget-content" src="assets/lib_emoticones/elements/bowtie2.png" alt="el"/></div>
                                <div class="obj_item"><img id="obj_9" width="50" height="44" class="ui-widget-content" src="assets/lib_emoticones/elements/pipe.png" alt="el"/></div>
                                <div class="obj_item"><img id="obj_10" width="50" height="38" class="ui-widget-content" src="assets/lib_emoticones/elements/hat.png" alt="el"/></div>
                                <div class="obj_item"><img id="obj_11" width="50" height="35" class="ui-widget-content" src="assets/lib_emoticones/elements/lips.png" alt="el"/></div>
                                <div class="obj_item"><img id="obj_12" width="50" height="33" class="ui-widget-content" src="assets/lib_emoticones/elements/lips2.png" alt="el"/></div>
                                <div class="obj_item"><img id="obj_13" width="50" height="36" class="ui-widget-content" src="assets/lib_emoticones/elements/cigarette.png" alt="el"/></div>
                                <div class="obj_item"><img id="obj_14" width="50" height="59" class="ui-widget-content" src="assets/lib_emoticones/elements/hair.png" alt="el"/></div>
                                <div class="obj_item"><img id="obj_15" width="50" height="32" class="ui-widget-content" src="assets/lib_emoticones/elements/manga.png" alt="el"/></div>
                                <div class="obj_item"><img id="obj_16" width="50" height="50" class="ui-widget-content" src="assets/lib_emoticones/elements/bird.png" alt="el"/></div>
                                <div class="obj_item"><img id="obj_17" width="50" height="50" class="ui-widget-content" src="assets/lib_emoticones/elements/dognose.png" alt="el"/></div>
                                <div class="obj_item"><img id="obj_18" width="50" height="23" class="ui-widget-content" src="assets/lib_emoticones/elements/dogears.png" alt="el"/></div>
                                <div class="obj_item"><img id="obj_19" width="50" height="41" class="ui-widget-content" src="assets/lib_emoticones/elements/pignose.png" alt="el"/></div> 
                                <div class="obj_item"><img id="obj_20" width="50" height="29" class="ui-widget-content" src="assets/lib_emoticones/elements/lips3.png" alt="el"/></div>       
                                <div class="obj_item"><img id="obj_21" width="50" height="23" class="ui-widget-content" src="assets/lib_emoticones/elements/beard1.png" alt="el"/></div>    
                            </div>                            
                            <form id="jsonform" action="merge.php" method="POST">
                              <input id="jsondata" name="jsondata" type="hidden" value="" autocomplete="off"></input>

                            </form>

                             <script>       
                               var nuevoalias = jQuery.noConflict();   
                               nuevoalias(document).ready(function(id) {
                                var count_dropped_hits = 0;
                                var data = {
                                            "images": [
                                                {"id" : "obj_0" ,"src" :  nuevoalias('#obj_0').attr('src'),"width" : "640", "height" : "480"}
                                            ]
                                        };
                                // Array Remove - By John Resig (MIT Licensed)
                                Array.prototype.remove = function(from, to) {
                                  var rest = this.slice((to || from) + 1 || this.length);
                                  this.length = from < 0 ? this.length + from : from;
                                  return this.push.apply(this, rest);
                                };
                                
                                /*  remove an object from data */
                                nuevoalias('.remove',nuevoalias('#tools')).live('click',function(){
                                  var nuevoaliasthis = nuevoalias(this);
                                  
                                  /* the element next to this is the input that stores the obj id */
                                  var objid = nuevoaliasthis.next().val();
                                  /* remove the object from the sidebar */
                                  nuevoaliasthis.parent().remove();
                                  /* ,from the picture */
                                  var divwrapper = nuevoalias('#'+objid).parent().parent();
                                  nuevoalias('#'+objid).remove();
                                  /* add again to the objects list */
                                  var image_elem    = nuevoaliasthis.parent().find('img');
                                  var thumb_width   = image_elem.attr('width');
                                  var thumb_height  = image_elem.attr('height');
                                  var thumb_src     = image_elem.attr('src');
                                  nuevoalias('<img/>',{
                                    id      :   objid,
                                    src     :   thumb_src,
                                    width   : thumb_width, 
                                    //height    : thumb_height,
                                    className : 'ui-widget-content'
                                  }).appendTo(divwrapper).resizable({
                                    handles : 'se',
                                    stop  : resizestop 
                                  }).parent('.ui-wrapper').draggable({
                                    revert: 'invalid'
                                  });
                                  /* and unregister it - delete from object data */
                                  var index = exist_object(objid);
                                  data.images.remove(index);
                                });
                                        
                                        /*  checks if an object was already registered */
                                        function exist_object(id){
                                            for(var i = 0;i<data.images.length;++i){
                                                if(data.images[i].id == id)
                                                    return i;
                                            }
                                            return -1;
                                        }
                                
                                /* triggered when stop resizing an object */
                                function resizestop(event, ui) {
                                  //calculate and change values to obj (width and height)
                                  var nuevoaliasthis     = nuevoalias(this);
                                  var objid   = nuevoaliasthis.find('.ui-widget-content').attr('id');
                                  var objwidth  = ui.size.width;
                                  var objheight   = ui.size.height;
                                
                                  var index     = exist_object(objid);
                                
                                  if(index!=-1) { //if exists (it should!) update width and height
                                    data.images[index].width  = objwidth;
                                    data.images[index].height   = objheight;
                                  }
                                        }
                                /* objects are resizable and draggable */
                                        nuevoalias('#objects_emotico img').resizable({
                                            /* only diagonal (south east)*/
                                            handles : 'se',
                                  stop  : resizestop 
                                        }).parent('.ui-wrapper').draggable({
                                            revert  : 'invalid'
                                        });
                                
                                        nuevoalias('#background_emotico').droppable({
                                            accept  : '#objects_emotico div', /* accept only draggables from #objects */
                                            drop  : function(event, ui) {
                                                var nuevoaliasthis     = nuevoalias(this);
                                                ++count_dropped_hits;
                                    var draggable_elem = ui.draggable;
                                    draggable_elem.css('z-index',count_dropped_hits);
                                    /* object was dropped : register it */
                                                var objsrc    = draggable_elem.find('.ui-widget-content').attr('src');
                                                var objwidth  = parseFloat(draggable_elem.css('width'),10);
                                                var objheight   = parseFloat(draggable_elem.css('height'),10);
                                  
                                                /* for top and left we decrease the top and left of the droppable element */
                                                var objtop    = ui.offset.top - nuevoaliasthis.offset().top;
                                                var objleft   = ui.offset.left - nuevoaliasthis.offset().left;
                                                               
                                                var objid   = draggable_elem.find('.ui-widget-content').attr('id');
                                  
                                                var index     = exist_object(objid);
                                    
                                                if(index!=-1) { //if exists update top and left
                                                    data.images[index].top  = objtop;
                                                    data.images[index].left = objleft;
                                                }
                                                else{         
                                      /* register new one */
                                                    var newObject = { 
                                        'id'    : objid,
                                                        'src'     : objsrc,
                                                        'width'   : objwidth,
                                                        'height'  : objheight,
                                                        'top'     : objtop,
                                                        'left'    : objleft,
                                        'rotation'  : '0'
                                                    };
                                      data.images.push(newObject);
                                      /* add object to sidebar*/
                                      
                                      nuevoalias('<div/>',{
                                        className : 'item'
                                      }).append(
                                        nuevoalias('<div/>',{
                                          className : 'thumb',
                                          html    : '<img width="50" class="ui-widget-content" src="'+objsrc+'"></img>'
                                        })
                                      ).append(
                                        nuevoalias('<div/>',{
                                          className : 'slider',
                                          html    : '<span>Rotate</span><span class="degrees">0</span>'
                                        })
                                      ).append(
                                        nuevoalias('<a/>',{
                                          className : 'remove'
                                        })
                                      ).append(
                                        nuevoalias('<input/>',{
                                          type    : 'hidden',
                                          value   : objid   // keeps track of which object is associated
                                        })
                                      ).appendTo(nuevoalias('#tools'));
                                      nuevoalias('.slider').slider({
                                        orientation : 'horizontal',
                                        max     : 180,
                                        min     : -180,
                                        value   : 0,
                                        slide   : function(event, ui) {
                                          var nuevoaliasthis = nuevoalias(this);
                                          /* Change the rotation and register that value in data object when it stops */
                                          draggable_elem.css({'-moz-transform':'rotate('+ui.value+'deg)','-webkit-transform':'rotate('+ui.value+'deg)'});
                                          nuevoalias('.degrees',nuevoaliasthis).html(ui.value);
                                        },
                                        stop    : function(event, ui) {
                                          newObject.rotation = ui.value;
                                        }
                                      }); 
                                                }
                                            }
                                        });
                              
                                /* User presses the download button */
                                        nuevoalias('#submit').bind('click',function(){
                                            var dataString  = JSON.stringify(data);
                                            nuevoalias('#jsondata').val(dataString);
                                  nuevoalias('#jsonform').submit();
                                        });
                                    });
                            </script>
                          

                        </div>      
  
                    </div>
                    <div id="step-3">
                    
                                      
                  </div>
                   <div class="actionBar">  
                    <a id="submit" class="btn btn-success">Siguiente</a>
                    <a href="#" class="btn btn-primary buttonDisabled"><label for="enviar">Atras</label></a>
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
 <script src="assets/js/jquery.min.js"></script>
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
 

  
</body>

</html>
