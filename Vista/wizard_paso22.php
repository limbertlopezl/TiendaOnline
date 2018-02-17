<?php
$target_path = "prueba/";
$target_path = $target_path.basename( $_FILES['imagen']['name']); 
$nombreImagen='prueba/'.basename( $_FILES['imagen']['name']);
if(move_uploaded_file($_FILES['imagen']['tmp_name'], $target_path)) {
 //echo "El archivo ". basename( $_FILES['imagen']['name']). " ha sido subido";
} else{
//echo "Ha ocurrido un error, trate de nuevo!";
}

 ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
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
<!--  plugins para rotar imagen -->

  <link type="text/css" href="assets/lib_emoticones/css/jquery.ui.theme.css" rel="stylesheet" />
  <link type="text/css" href="assets/lib_emoticones/css/jquery.ui.core.css" rel="stylesheet" />
  <link type="text/css" href="assets/lib_emoticones/css/jquery.ui.resizable.css" rel="stylesheet" />
  <link type="text/css" href="assets/lib_emoticones/css/jquery.ui.slider.css" rel="stylesheet" />
  <link type="text/css" href="assets/lib_emoticones/css/style_emotico.css" rel="stylesheet" />

  
   <!-- fin  plugins para rotar imagen -->
  

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

          <!-- sidebar menu -->
          <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">

            <div class="menu_section">
              <h3>General</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-home"></i> Home <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="index.html">Dashboard</a>
                    </li>
                    <li><a href="index2.html">Dashboard2</a>
                    </li>
                    <li><a href="index3.html">Dashboard3</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-edit"></i> Forms <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="form.html">General Form</a>
                    </li>
                    <li><a href="form_advanced.html">Advanced Components</a>
                    </li>
                    <li><a href="form_validation.html">Form Validation</a>
                    </li>
                    <li><a href="form_wizards.html">Form Wizard</a>
                    </li>
                    <li><a href="form_upload.html">Form Upload</a>
                    </li>
                    <li><a href="form_buttons.html">Form Buttons</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-desktop"></i> UI Elements <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="general_elements.html">General Elements</a>
                    </li>
                    <li><a href="media_gallery.html">Media Gallery</a>
                    </li>
                    <li><a href="typography.html">Typography</a>
                    </li>
                    <li><a href="icons.html">Icons</a>
                    </li>
                    <li><a href="glyphicons.html">Glyphicons</a>
                    </li>
                    <li><a href="widgets.html">Widgets</a>
                    </li>
                    <li><a href="invoice.html">Invoice</a>
                    </li>
                    <li><a href="inbox.html">Inbox</a>
                    </li>
                    <li><a href="calender.html">Calender</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-table"></i> Tables <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="tables.html">Tables</a>
                    </li>
                    <li><a href="tables_dynamic.html">Table Dynamic</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-bar-chart-o"></i> Data Presentation <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="chartjs.html">Chart JS</a>
                    </li>
                    <li><a href="chartjs2.html">Chart JS2</a>
                    </li>
                    <li><a href="morisjs.html">Moris JS</a>
                    </li>
                    <li><a href="echarts.html">ECharts </a>
                    </li>
                    <li><a href="other_charts.html">Other Charts </a>
                    </li>
                  </ul>
                </li>
              </ul>
            </div>
            <div class="menu_section">
              <h3>Live On</h3>
              <ul class="nav side-menu">
                <li><a><i class="fa fa-bug"></i> Additional Pages <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="e_commerce.html">E-commerce</a>
                    </li>
                    <li><a href="projects.html">Projects</a>
                    </li>
                    <li><a href="project_detail.html">Project Detail</a>
                    </li>
                    <li><a href="contacts.html">Contacts</a>
                    </li>
                    <li><a href="profile.html">Profile</a>
                    </li>
                  </ul>
                </li>
                <li><a><i class="fa fa-windows"></i> Extras <span class="fa fa-chevron-down"></span></a>
                  <ul class="nav child_menu" style="display: none">
                    <li><a href="page_404.html">404 Error</a>
                    </li>
                    <li><a href="page_500.html">500 Error</a>
                    </li>
                    <li><a href="plain_page.html">Plain Page</a>
                    </li>
                    <li><a href="login.html">Login Page</a>
                    </li>
                    <li><a href="pricing_tables.html">Pricing Tables</a>
                    </li>

                  </ul>
                </li>
                <li><a><i class="fa fa-laptop"></i> Landing Page <span class="label label-success pull-right">Coming Soon</span></a>
                </li>
              </ul>
            </div>

          </div>
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
            <div class="title_left">
              <h3>Form Wizards</h3>
            </div>

            <div class="title_right">
              <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                <div class="input-group">
                  <input type="text" class="form-control" placeholder="Search for...">
                  <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                </div>
              </div>
            </div>
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
                        <a href="#step-1" class="done">
                          <span class="step_no">1</span>
                          <span class="step_descr">
                                            Paso 1<br />
                                            <small>Selecciona una Imagen</small>
                                        </span>
                        </a>
                      </li>
                      <li>
                        <a href="#step-2" class="selected">
                          <span class="step_no">2</span>
                          <span class="step_descr">
                                            Paso 2<br />
                                            <small>Agregar las figuras que deseas.</small>
                                        </span>
                        </a>
                      </li>
                      <li>
                        <a href="#step-3" class="done" isdone="3"  rel="3">
                          <span class="step_no">3</span>
                          <span class="step_descr">
                                            Paso 3<br />
                                            <small>Step 3 description</small>
                                        </span>
                        </a>
                      </li>
                      <li>
                        <a href="#step-4" class="done"> 
                          <span class="step_no">4</span>
                          <span class="step_descr">
                                            Paso 4<br />
                                            <small>Step 4 description</small>
                                        </span>
                        </a>
                      </li>
                    </ul>



                    <div id="step-1">
                    </div>

                    <div id="step-2"> 
                         <div id="content">
                            <div id="background" class="background">              
                                <img id="obj_0" src="<?php echo $nombreImagen ?>" width="640" height="480"></img>
                            </div>
                            <div id="tools">
                            </div>
                            <div id="objects">
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
                            <a id="submit"><span></span></a>
                            <form id="jsonform" action="merge.php" method="POST">
                              <input id="jsondata" name="jsondata" type="hidden" value="" autocomplete="off"></input>

                            </form>                             

                        </div>      

                         <script>       
                                $(document).ready(function(id) {

                                var count_dropped_hits = 0;
                                var data = {
                                            "images": [
                                                {"id" : "obj_0" ,"src" :  $('#obj_0').attr('src'),"width" : "640", "height" : "480"}
                                            ]
                                        };
                                // Array Remove - By John Resig (MIT Licensed)
                                Array.prototype.remove = function(from, to) {
                                  var rest = this.slice((to || from) + 1 || this.length);
                                  this.length = from < 0 ? this.length + from : from;
                                  return this.push.apply(this, rest);
                                };
                                
                                /*  remove an object from data */
                                $('.remove',$('#tools')).live('click',function(){
                                  var $this = $(this);
                                  
                                  /* the element next to this is the input that stores the obj id */
                                  var objid = $this.next().val();
                                  /* remove the object from the sidebar */
                                  $this.parent().remove();
                                  /* ,from the picture */
                                  var divwrapper = $('#'+objid).parent().parent();
                                  $('#'+objid).remove();
                                  /* add again to the objects list */
                                  var image_elem    = $this.parent().find('img');
                                  var thumb_width   = image_elem.attr('width');
                                  var thumb_height  = image_elem.attr('height');
                                  var thumb_src     = image_elem.attr('src');
                                  $('<img/>',{
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
                                  var $this     = $(this);
                                  var objid   = $this.find('.ui-widget-content').attr('id');
                                  var objwidth  = ui.size.width;
                                  var objheight   = ui.size.height;
                                
                                  var index     = exist_object(objid);
                                
                                  if(index!=-1) { //if exists (it should!) update width and height
                                    data.images[index].width  = objwidth;
                                    data.images[index].height   = objheight;
                                  }
                                        }
                                /* objects are resizable and draggable */
                                        $('#objects img').resizable({
                                            /* only diagonal (south east)*/
                                            handles : 'se',
                                  stop  : resizestop 
                                        }).parent('.ui-wrapper').draggable({
                                            revert  : 'invalid'
                                        });
                                
                                        $('#background').droppable({
                                            accept  : '#objects div', /* accept only draggables from #objects */
                                            drop  : function(event, ui) {
                                                var $this     = $(this);
                                                ++count_dropped_hits;
                                    var draggable_elem = ui.draggable;
                                    draggable_elem.css('z-index',count_dropped_hits);
                                    /* object was dropped : register it */
                                                var objsrc    = draggable_elem.find('.ui-widget-content').attr('src');
                                                var objwidth  = parseFloat(draggable_elem.css('width'),10);
                                                var objheight   = parseFloat(draggable_elem.css('height'),10);
                                  
                                                /* for top and left we decrease the top and left of the droppable element */
                                                var objtop    = ui.offset.top - $this.offset().top;
                                                var objleft   = ui.offset.left - $this.offset().left;
                                                               
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
                                      
                                      $('<div/>',{
                                        className : 'item'
                                      }).append(
                                        $('<div/>',{
                                          className : 'thumb',
                                          html    : '<img width="50" class="ui-widget-content" src="'+objsrc+'"></img>'
                                        })
                                      ).append(
                                        $('<div/>',{
                                          className : 'slider',
                                          html    : '<span>Rotate</span><span class="degrees">0</span>'
                                        })
                                      ).append(
                                        $('<a/>',{
                                          className : 'remove'
                                        })
                                      ).append(
                                        $('<input/>',{
                                          type    : 'hidden',
                                          value   : objid   // keeps track of which object is associated
                                        })
                                      ).appendTo($('#tools'));
                                      $('.slider').slider({
                                        orientation : 'horizontal',
                                        max     : 180,
                                        min     : -180,
                                        value   : 0,
                                        slide   : function(event, ui) {
                                          var $this = $(this);
                                          /* Change the rotation and register that value in data object when it stops */
                                          draggable_elem.css({'-moz-transform':'rotate('+ui.value+'deg)','-webkit-transform':'rotate('+ui.value+'deg)'});
                                          $('.degrees',$this).html(ui.value);
                                        },
                                        stop    : function(event, ui) {
                                          newObject.rotation = ui.value;
                                        }
                                      }); 
                                                }
                                            }
                                        });
                              
                                /* User presses the download button */
                                        $('#submit').bind('click',function(){
                                            var dataString  = JSON.stringify(data);
                                            $('#jsondata').val(dataString);
                                  $('#jsonform').submit();
                                        });
                                    });
                         </script>


                    </div>
                    <div id="step-3">
                     
                    </div>
                    <div id="step-4">
                      
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


  <!-- bootstrap progress js -->
  <script src="assets/js/progressbar/bootstrap-progressbar.min.js"></script>
  <script src="assets/js/nicescroll/jquery.nicescroll.min.js"></script>
  <!-- icheck -->
  <script src="assets/js/icheck/icheck.min.js"></script>

  <script src="assets/js/custom.js"></script>

  <!-- form wizard -->
  <script type="text/javascript" src="assets/js/wizard/jquery.smartWizard.js"></script>
  <!-- dropzone --> 
  <script src="assets/js/dropzone/dropzone.js"></script>  
  <!-- pace -->
  <script src="assets/js/pace/pace.min.js"></script>
 

</body>

</html>
