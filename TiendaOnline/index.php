<?php 
/**
* Program:  index.php
* Objetive: Presentacion Principal de la pagina
* Description:Este programa muestara las funcionalidades principales de sistema 
* @query_string Parámetro recibido en el query string
* @post   $VarPost1: ninguna
* @get    $VarGet: ninguno
* @author   Limbert Lopez
* @called_by: varios
* @calls: varios
*/

$rutaLinks="frontend/assets";
$rutaTitulo="frontend/includes";
 ?>
 
<!DOCTYPE html>
<head>
	<?php include"$rutaTitulo/titulo.php";?>
	<?php include"$rutaTitulo/meta.php";?>
	<?php  
		echo"<link href='$rutaLinks/plugins/owl-carousel/owl.carousel.css' rel='stylesheet' type='text/css'/>";
		echo"<link href='$rutaLinks/plugins/owl-carousel/owl.theme.css' rel='stylesheet' type='text/css'/>";
		echo"<link href='$rutaLinks/plugins/headereffects/css/component.css' rel='stylesheet' type='text/css'/>";
		echo"<link href='$rutaLinks/plugins/headereffects/css/normalize.css' rel='stylesheet' type='text/css'/>";
		echo"<link href='$rutaLinks/plugins/pace/pace-theme-flash.css' rel='stylesheet' type='text/css' media='screen'/>";
		//<!-- BEGIN CORE CSS FRAMEWORK -->
		echo"<link href='$rutaLinks/plugins/boostrapv3/css/bootstrap.min.css' rel='stylesheet' type='text/css'/>";
		echo"<link href='$rutaLinks/plugins/boostrapv3/css/bootstrap-theme.min.css' rel='stylesheet' type='text/css'/>";
		echo"<link href='$rutaLinks/plugins/font-awesome/css/font-awesome.min.css' rel='stylesheet' type='text/css'/>";
		//<!-- END CORE CSS FRAMEWORK -->
		//<!-- BEGIN CSS TEMPLATE -->
		echo"<link href='$rutaLinks/css/style.css' rel='stylesheet' type='text/css'/>";
		echo"<link href='$rutaLinks/css/magic_space.css' rel='stylesheet' type='text/css'/>";
		echo"<link href='$rutaLinks/css/responsive.css' rel='stylesheet' type='text/css'/>";
		echo"<link href='$rutaLinks/css/animate.min.css' rel='stylesheet' type='text/css'/>";
		//<!-- END CSS TEMPLATE -->
		echo"<script type='text/javascript' src='$rutaLinks/plugins/jquery-1.8.3.min.js'></script>";
		//<!-- SLIDER REVOLUTION 4.x SCRIPTS  -->
		echo"<script type='text/javascript' src='$rutaLinks/plugins/rs-plugin/js/jquery.themepunch.plugins.min.js'></script>";
		echo"<script type='text/javascript' src='$rutaLinks/plugins/rs-plugin/js/jquery.themepunch.revolution.min.js'></script>";
		echo"<link rel='stylesheet' type='text/css' href='$rutaLinks/plugins/rs-plugin/css/settings.css' media='screen'/>";
	?>
</head>
<!-- END HEAD -->
<body>
<div class="main-wrapper">

			<header id="ha-header" class="ha-header ha-header-hide "  >
				<div class="ha-header-perspective">
			<div class="ha-header-front navbar navbar-default">
					  <div class="compressed">
						<div class="navbar-header">
						  <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
						  <a href="#" class="navbar-brand compressed"><img src="frontend/assets/img/logo_condensed.png" alt="" data-src="frontend/assets/img/logo_condensed.png" data-src-retina="frontend/assets/img/logo2x.png" width="119" height="22"/></a>
						</div>
						<div class="navbar-collapse collapse">
						  <ul class="nav navbar-nav navbar-right" >
							<li ><a href="index.php">Inicio</a></li>													
							<li ><a href="frontend/portafolio.php">Portfolio</a></li>
							<li ><a href="contacto.php">Contacto</a></li>
							<li ><a href="./Vista/V_Login.php">Ingresar</a></li>
						  </ul>
						</div><!--/.nav-collapse -->
					  </div>
			
					</div>
				</div>
			</header>
	
<div class="section ha-waypoint"  data-animate-down="ha-header-hide" data-animate-up="ha-header-hide">
<div role="navigation" class="navbar navbar-transparent navbar-top">
     <div class="container"> 
	  <div class="compressed">
        <div class="navbar-header">
		   <button data-target=".navbar-collapse" data-toggle="collapse" class="navbar-toggle" type="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a href="#" class="navbar-brand"><img src="frontend/assets/img/logo.png" data-src="frontend/assets/img/logo.png" data-src-retina="frontend/assets/img/logo_2x.png" width="119" height="22" alt=""/></a>		 
        </div>
        <div class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right" >
			<li ><a href="index.php">Inicio</a></li>
			<li ><a href="frontend/portafolio.php">Portfolio</a></li>
			<li ><a href="frontend/contacto.php">Contacto</a></li>
			<li ><a href="./Vista/V_Login.php">Ingresar</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>
    </div>
	<!--BEGIN SLIDER -->
	<div class="tp-banner-container">
		<div class="tp-banner" id="home" >
			<ul>
				<!-- SLIDE  -->
				<li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
					<!-- MAIN IMAGE -->
					<img src="frontend/assets/img/bg/slide_one.jpg"   alt="slidebg1"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">


					<!-- LAYERS -->
					<div class="tp-caption mediumlarge_light_white_center sft tp-resizeme slider"
							data-x="center" data-hoffset="0"
							data-y="60"
							data-speed="500"
							data-start="800"
							data-easing="Power4.easeOut"
							data-endspeed="300"
							data-endeasing="Power1.easeIn"
							data-captionhidden="off"
							style="z-index: 6"><h2 class="text-white custom-font title ">CREAMOS Y TRABAJAMOS<br> PARA TI</h2>

					</div>
					<div class="tp-caption sfb slider tp-resizeme slider"
						data-x="center"
						data-hoffset="0"
						data-y="240"
						data-speed="800"
						data-start="1000"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">	<a href="./Vista/V_Login.php" class="btn btn-purple btn-lg  btn-large m-r-10">REGISTRARSE AHORA</a>
					</div>
					<div class="tp-caption fade slider tp-resizeme slider"
						data-x="center"
						data-hoffset="0"
						data-y="300"
						data-speed="500"
						data-start="800"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">	<a href="#" class="text-white m-r-10">o siguenos en facebook</a>
					</div>
				</li>					
				<li data-transition="fade" data-slotamount="5" data-masterspeed="700" >
					<!-- MAIN IMAGE -->
					<img src="frontend/assets/img/bg/picture-1.jpg"   alt="slidebg2"  data-bgfit="cover" data-bgposition="center center" data-bgrepeat="no-repeat">

					<!-- LAYERS -->
					<div class="tp-caption mediumlarge_light_white_center sft tp-resizeme slider"
							data-x="center" data-hoffset="0"
							data-y="60"
							data-speed="500"
							data-start="800"
							data-easing="Power4.easeOut"
							data-endspeed="300"
							data-endeasing="Power1.easeIn"
							data-captionhidden="off"
							style="z-index: 6"><h2 class="text-white custom-font title ">DISEÑAMOS<br>DE TODO PARA TI</h2>

					</div>
					<div class="tp-caption sfb slider tp-resizeme slider"
						data-x="center"
						data-hoffset="0"
						data-y="240"
						data-speed="800"
						data-start="1000"
						data-easing="Power4.easeOut"
						data-endspeed="300"
						data-endeasing="Power1.easeIn"
						data-captionhidden="off"
						style="z-index: 6">	<a href="./Vista/V_Login.php" class="btn btn-danger btn-lg  btn-large m-r-10">REGISTRARSE AHORA</a>
					</div>
					
				</li>	
				<!-- SLIDE  -->
			<li data-transition="parallaxtoright" data-slotamount="7" data-masterspeed="1000"  data-fstransition="fade" data-fsmasterspeed="1000" data-fsslotamount="7">
						<!-- MAIN IMAGE -->
						<img src="frontend/assets/video/first-frame.jpg"  alt="video_forest"  data-bgposition="center center" data-bgfit="cover" data-bgrepeat="no-repeat">
					
						<!-- LAYERS -->

						<!-- LAYER NR. 1 -->
						<div class="tp-caption tp-fade fadeout fullscreenvideo"
							data-x="0"
							data-y="0"
							data-speed="1000"
							data-start="1100"
							data-easing="Power4.easeOut"
							data-endspeed="1500"
							data-endeasing="Power4.easeIn"
							data-autoplay="true"
							data-autoplayonlyfirsttime="false"
							data-nextslideatend="true"
							data-forceCover="1"
							data-dottedoverlay="twoxtwo"
							data-aspectratio="16:9"
							data-forcerewind="on"
							style="z-index: 2">


						 <video class="video-js vjs-default-skin" preload="none" style="width:100%;height:100%;"
						poster='assets/video/first-frame.jpg' data-setup="{}">
						<source src='frontend/assets/video/home.mp4' type='video/mp4' />
						<source src='frontend/assets/video/home.webm' type='video/webm' />
						<source src='frontend/assets/video/home.ogv' type='video/ogg' />
						</video>

						</div>

						<!-- LAYER NR. 2 -->
						<div class="tp-caption large_bold_white_25 customin customout tp-resizeme"
							data-x="center" data-hoffset="0"
							data-y="170"
							data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="600"
							data-start="1400"
							data-easing="Power4.easeOut"
							data-endspeed="600"
							data-endeasing="Power0.easeIn"
							style="z-index: 3">La manera más clara en el Universo<br/> es a través de un desierto del bosque.

						</div>

						<!-- LAYER NR. 3 -->
						<div class="tp-caption medium_text_shadow customin customout tp-resizeme"
							data-x="center" data-hoffset="0"
							data-y="bottom" data-voffset="-140"
							data-customin="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:5;scaleY:5;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-customout="x:0;y:0;z:0;rotationX:0;rotationY:0;rotationZ:0;scaleX:0.75;scaleY:0.75;skewX:0;skewY:0;opacity:0;transformPerspective:600;transformOrigin:50% 50%;"
							data-speed="600"
							data-start="1700"
							data-easing="Power4.easeOut"
							data-endspeed="600"
							data-endeasing="Power0.easeIn"
							style="z-index: 4">John Muir
						</div>
					</li>
			</ul>
			<div class="tp-bannertimer"></div>
		</div>
	</div>
	<!--END SLIDER
		
	-->
			

	
</div>
<div class="section ">
	<div class="container">
		<div class="p-t-40 p-b-40">
			<h2 class="text-center">Create the <span class="semi-bold">impossible</span>, We’ve <span class="semi-bold">designed everything</span> beyond... <a href="./Vista/V_Login.php" class="btn btn-purple btn-lg  btn-large m-r-10">REGISTRARSE AHORA </a></h2>
		</div>
	</div>
</div>	
<div class="section white ha-waypoint"  data-animate-down="ha-header-color" data-animate-up="ha-header-hide" >
		<div class="container">
		<div class="p-t-60">
		<div class="row">
		<div class="col-md-12 feature-list ">
			<div class="col-md-4 " data-ride="animated" data-animation="fadeIn" data-delay="300">
			<h4 class="title">FULL PACKAGE</h4>
			<p>
			We combine intelligent thinking with stimulating design to keep your brand engaging and help challenging brands find their clarity.
			</p>
			</div>
			<div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="600">
			<h4 class="title">CUSTOMIZATION</h4>
			<p>
			Make any design your own using the Style Editor. Personalize fonts, colors, and layouts to create the custom look you want.
			</p>
			</div>
			<div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="900">
			<h4 class="title">SOCIAL</h4>
			<p>
			Import. Sync. Publish. Make your website the center of your online identity on the web with our powerful social integrations.
			</p>
			</div>
		</div>
		</div>
		<br>
		<div class="row">
		<div class="col-md-12 feature-list">
			<div class="col-md-4 " data-ride="animated" data-animation="fadeIn" data-delay="1200">
			<h4 class="title">TEMPLATES</h4>
			<p>
			Squarespace websites are created with modern browsers and mobile devices in mind. They employ the latest HTML, CSS and Javascript techniques.
			</p>
			</div>
			<div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="1500">
			<h4 class="title">CUSTOMIZATION</h4>
			<p>
			Make any design your own using the Style Editor. Personalize fonts, colors, and layouts to create the custom look you want.
			</p>
			</div>
			<div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="1800">
			<h4 class="title">SOCIAL</h4>
			<p>
			Import. Sync. Publish. Make your website the center of your online identity on the web with our powerful social integrations.
			</p>
			</div>
			<div class="clearfix"></div>
		</div>
		</div>
		<div class="section relative">
			<div class="row">

				<img src="frontend/assets/img/browser.png" alt="" class="resize p-t-60 col-md-9 hidden-xs" style="" data-ride="animated" data-animation="fadeInUp" data-delay="300">
		
		
				<img src="frontend/assets/img/phone.png"	alt="" class="resize p-t-60 col-md-2 push-bottom hidden-sm hidden-xs visible-lg visible-md" data-ride="animated" data-animation="fadeInRight" data-delay="600" style="right:9%">			
			
		
			</div>
		</div>
			<div class="clearfix"></div>
		</div>
		</div>
		</div>

<div class="section grey">
	<div class="container">
	  <div class="p-t-40 p-b-50 ">
		<div class="row">
			<div class="col-md-12">
			  <h2><span class="normal">Make life much easier</span><br>
			  download webarch full package with <span class="normal">frontend</span><button type="button" class="btn btn-primary btn-cons m-l-30">Subscribe</button></h2>
			</div>
		</div>
		<br>
		<div class="row feature-list">		
			<div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="300">
			<h4 class="title custom-font">MILLIONS OF POSSIBILITIES</h4>
			<p class="p-r-50">
				Hundreds of free desktop apps Enjoy a mobile-like app experience on your PC, with free apps and games like Facebook and Farmville 2.
			</p>
			</div>
			<div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="600">
			<h4 class="title custom-font">REAL TIME NOTIFICATIONS</h4>
			<p class="p-r-50">
				Stay informed with notifications from your favorite apps keeping you up to date on your emails, tweets and more.
			</p>
			</div>
			<div class="col-md-4" data-ride="animated" data-animation="fadeIn" data-delay="900">
			<h4 class="title custom-font">ONE CLICK AWAY</h4>
			<p class="p-r-50">
				Find, organize, and launch your favorite apps, sites, and files faster and easier than ever before.
			</p>
			</div>
		
		</div>
		</div>
	</div>
</div>	
<div class="section white">
		<div class="container">
			<div class="p-t-60 p-b-50 ">
				<div class="row feature-list">
					<div class="col-md-3 ">
						<h4 class="custom-font title">CLIENTES</h4>					
						<h1 class="custom-font"><span class="number-animator" data-value="4500" data-animation-duration="800">0</span></h1>
						<div class="col-md-8 no-padding">
							<div class="progress transparent progress-small no-radius ">
							  <div class="progress-bar progress-bar-black animated-progress-bar " data-percentage="79%"></div>
							</div>
						</div>
					</div>
					<div class="col-md-3">
						<h4 class="custom-font title">SITIOS</h4>
						<h1 class="custom-font"><span class="number-animator" data-value="505" data-animation-duration="800">0</span></h1>
						<div class="col-md-8 no-padding">
						<div class="progress transparent progress-small no-radius no-margin">
						  <div class="progress-bar progress-bar-black animated-progress-bar" data-percentage="45%" ></div>
						</div>
						</div>
					</div>
					<div class="col-md-3">
						<h4 class="custom-font title">PROYECTOS</h4>
						<h1 class="custom-font"><span class="number-animator" data-value="1500" data-animation-duration="800">0</span></h1>
						<div class="col-md-8 no-padding">
						<div class="progress transparent progress-small no-radius no-margin">
						  <div class="progress-bar progress-bar-black animated-progress-bar" data-percentage="12%"></div>
						</div>
						</div>
					</div>
					<div class="col-md-3">
						<h4 class="custom-font title">TRABAJOS</h4>
						<h1 class="custom-font"><span class="number-animator" data-value="14000" data-animation-duration="800">0</span></h1>
						<div class="col-md-8 no-padding">
						<div class="progress transparent progress-small no-radius no-margin">
						  <div class="progress-bar progress-bar-black animated-progress-bar" data-percentage="85%"></div>
						</div>
						</div>
					</div>
				</div>		
			</div>
		</div>
</div>
<div class="section table-layout">	
			<div id="working-section" class="table-cell v-middle">	
				<div >
				<h2 class="text-white text-center custom-font no-margin">MILLONES DE CLIENTES SATISFECHOS</h2>
				</div>
			</div>
</div>
<div class="section white">
		<div class="container">
			<div class="p-t-60 p-b-50">
			  <div id="testomonials" class="owl-carousel row">
				<div class="item">
					<div class="col-md-6  col-md-offset-3">
						<h3 class="normal text-center">
						Estamos feliz de que Web.arch es capaz de ofrecer
apoyo específicamente adaptado a las empresas creativas y me encantaría Nottingham a convertido en famoso por esto.
						</h3>
						<p class="text-center">Caroline Hennigan, Programme Director, Broadway</p>
					</div>
				</div>
				<div class="item">
					<div class="col-md-6   col-md-offset-3">
						<h3 class="normal text-center">
						Estamos feliz de que Web.arch es capaz de ofrecer
apoyo específicamente adaptado a las empresas creativas y me encantaría Nottingham a convertido en famoso por esto.
						</h3>
						<p class="text-center">Caroline Hennigan, Programme Director, Broadway</p>
					</div>
				</div>
				<div class="item">
					<div class="col-md-6   col-md-offset-3">
						<h3 class="semi-bold text-center">
						Estamos feliz de que Web.arch es capaz de ofrecer
apoyo específicamente adaptado a las empresas creativas y me encantaría Nottingham a convertido en famoso por esto.
						</h3>
						<p class="text-center">Caroline Hennigan, Director de Eventos, Santa Cruz</p>
					</div>
				</div>
		</div>
	</div>
	</div>
</div>
<div class="section black">
		<div class="container">
			<div class="p-t-60 p-b-60">
				<div class="row">
					<div class="col-md-8 col-md-offset-2">
						<h2 class="text-center text-white m-b-30">Le gustaria suscribirse a nuestra <span class="semi-bold">pagina?</span> 
Registre su interes por debajo </h2>
					<div class="row form-row">
                      <div class="col-md-6 col-md-offset-2 no-padding  col-sm-6 col-sm-offset-2 col-xs-10 col-xs-offset-1">
                        <input name="form3Occupation" id="form3Occupation" type="text" class="form-control " placeholder="Introduzca su dirección de correo electrónico">
                      </div>
					  <div class="col-md-4 col-sm-4 col-xs-4 xs-p-l-10">
						<button type="button" class="btn btn-primary btn-cons">Suscribir</button>
					  </div>	
                    </div>
					<div class="row">
						<a href="#" class="text-white text-center col-md-11 col-sm-11 col-xs-11">o suscribirse al boletín</a>
					</div>
					<div class="clearfix"></div>
					<div class="row m-t-30">
						<div class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2">
						<div class="checkbox check-default">
						  <input id="checkbox1" type="checkbox" value="1">
						  <label for="checkbox1">boletines de noticias diarias</label>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="checkbox check-default">
						  <input id="checkbox2" type="checkbox" value="1">
						  <label for="checkbox2">No hay promociones</label>
						</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-5 col-md-offset-2 col-sm-5 col-sm-offset-2">
						<div class="checkbox check-default">
						  <input id="checkbox3" type="checkbox" value="1">
						  <label for="checkbox3">eventos específicos de la pagina</label>
						</div>
						</div>
						<div class="col-md-4 col-sm-4">
						<div class="checkbox check-default">
						  <input id="checkbox4" type="checkbox" value="1">
						  <label for="checkbox4">El acceso a boletines de noticias</label>
						</div>
						</div>
					</div>
					</div>					
				</div>
				
			</div>
		</div>
</div>
<div class="section white footer">
		<div class="container">
			<div class="p-t-30 p-b-50">
				<div class="row">
					<div class="col-md-2 col-lg-2 col-sm-2 col-xs-12 xs-m-b-20">
					<img src="frontend/assets/img/logo_condensed.png" alt="" data-src="frontend/assets/img/logo_condensed.png" data-src-retina="frontend/assets/img/logo2x.png" width="119" height="22"/>
					</div>
					<div class="col-md-4 col-lg-3 col-sm-4  col-xs-12 xs-m-b-20">
						<address class="xs-no-padding  col-md-6 col-lg-6 col-sm-6  col-xs-12">	
							Direccion<br>
							85/B Calle Cross,<br>
							Santa Cruz,BOLIVIA<br>
							NA1 42SL
						</address>
						<div class="xs-no-padding col-md-6 col-lg-6 col-sm-6">
							<div>(+591) 75610610</div>
							support@fotolaser.com
						</div>
						<div class="clearfix"></div>
					</div>
					<div class="col-md-2 col-lg-2 col-sm-2  col-xs-12 xs-m-b-20">
						Copyright © 2016
						Privacy Policy
						Design by limbert
					</div>
					<div class="col-md-2 col-lg-2 col-sm-2  col-xs-12 xs-m-b-20">
					<div class="bold">RECLUTAMIENTO</div>
					Estamos con frecuencia en la búsqueda de nuevos talentos!
					</div>
					<div class="col-md-2 col-lg-2 col-sm-2  col-xs-12 ">
					<div class="bold">SUGUENOS</div>
					Estamos con frecuencia en la búsqueda de nuevos talentos!

					</div>
				</div>
			</div>
		</div>
</div>
</div>		
<?php  
echo"<script src='$rutaLinks/plugins/boostrapv3/js/bootstrap.min.js' type='text/javascript'></script>";
echo"<script src='$rutaLinks/plugins/pace/pace.min.js' type='text/javascript'></script>";
echo"<script src='$rutaLinks/plugins/jquery-unveil/jquery.unveil.min.js' type='text/javascript'></script>"; 
echo"<script src='$rutaLinks/plugins/owl-carousel/owl.carousel.min.js' type='text/javascript'></script>";
echo"<script src='$rutaLinks/plugins/waypoints.min.js'></script>";
echo"<script src='$rutaLinks/plugins/parrallax/js/jquery.parallax-1.1.3.js' type='text/javascript' ></script>";
echo"<script src='$rutaLinks/plugins/jquery-nicescroll/jquery.nicescroll.min.js' type='text/javascript' ></script>";
echo"<script src='$rutaLinks/plugins/jquery-appear/jquery.appear.js' type='text/javascript' ></script>";
echo"<script src='$rutaLinks/plugins/jquery-numberAnimate/jquery.animateNumbers.js' type='text/javascript'></script> ";
echo"<script src='$rutaLinks/js/core.js' type='text/javascript' ></script>";?>
</body>