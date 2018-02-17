<!-- BEGIN MENU -->
<?php 
//5
	$tipo=$_SESSION['Tipo'];
	$idUser=$_SESSION['idUsuario'];
 ?>
<div class="page-sidebar" id="main-menu"> 
	<div class="page-sidebar-wrapper scrollbar-dynamic" id="main-menu-wrapper">
		<!-- BEGIN MINI-PROFILE -->
		<div class="user-info-wrapper">	
			<div class="profile-wrapper">
				<img src="assets_p/img/profiles/ClinicaAvatar.jpg" alt="" 
				data-src="assets_p/img/profiles/ClinicaAvatar.jpg" data-src-retina="assets_p/img/profiles/limbertAvatar2x.jpg"
				 width="69" height="69" />
			</div>
			<div class="user-info">
				<div class="greeting">Bienvenido</div>
				<div class="username"><?php echo $_SESSION['Nombre']; ?> <span class="semi-bold"></span></div>
				<div class="status">Estado<a href="#"><div class="status-icon green"></div>linea</a></div>
			</div>
		</div>
		<!-- END MINI-PROFILE -->
		<!-- BEGIN SIDEBAR MENU -->	
		<p class="menu-title">MENU<span class="pull-right"><a href="javascript:;"><i class="fa fa-refresh"></i></a></span></p>
		<ul>
			<li class="">
				<a href="javascript:;">
					<i class="icon-custom-home"></i>
					<!--<i > <img src="./assets_p/img/icon/online.png"></i> -->
					<span class="title ">Inicio</span>
					<span class="arrow"></span>
				</a>
				<ul class="sub-menu">
					<li ><a href="index.php">Menu principal</a></li>
					<?php 
						$link;
						if ($tipo=="C") {
							$link="V_Cliente_Editar.php?IdUsuario=".$idUser;
						}
						if ($tipo=="EM") {
							$link="V_Empresa_Editar.php?IdUsuario=".$idUser;
						}
						if ($tipo=="E") {
							$link="V_Empleado_Editar.php?IdUsuario=".$idUser;
						}
						if ($tipo=="A") {
							$link="V_Administrador_Editar.php?IdUsuario=".$idUser;
						}

					 ?>
					<li ><a href="<?php echo $link; ?>">Perfil</a></li>
					<li><a href="cerrarSesion.php">Salir</a></li>					
				</ul>
			</li>
			<li class="<?php if($tipo=="C" ||$tipo=="EM"){echo "hidden";}?>">
				<a href="javascript:;">
					<i class="glyphicon glyphicon-picture"></i>					
					<span class="title">EVENTOS</span>
					<span class="arrow"></span>
				</a>
				<ul class="sub-menu">
					<li ><a href="V_Evento.php">Eventos</a></li>								
				</ul>				
			</li>

			<li class="<?php if($tipo=="C" ||$tipo=="EM"){echo "hidden";}?>">
				<a href="javascript:;">
					<i class="glyphicon glyphicon-user"></i>					
					<span class="title">USUARIOS</span>
					<span class="arrow"></span>
				</a>
				<ul class="sub-menu">
					<li ><a href="V_Administrador.php" class="<?php if($tipo=="C" ||$tipo=="E"||$tipo=="EM"){echo "hidden";}?>">Administrador</a></li>
					<li><a href="V_Empleado.php" class="<?php if($tipo=="C" ||$tipo=="E" ||$tipo=="EM"){echo "hidden";}?>">Empleados</a></li>
					<li><a href="V_Cliente.php" class="<?php if($tipo=="C" ||$tipo=="EM"){echo "hidden";}?>">Clientes</a></li>
					<li><a href="V_Empresa.php"class="<?php if($tipo=="C" ||$tipo=="EM"){echo "hidden";}?>">Empresas</a></li>	
					<li><a href="V_Cargo.php" class="<?php if($tipo=="C" ||$tipo=="E" ||$tipo=="EM"){echo "hidden";}?>">Cargos</a></li>			
				</ul>				
			</li>
			<!-- FIN.. MENU DE MODULOS -->
			<!-- END ONE LEVEL MENU -->
			<!-- BEGIN TWO LEVEL MENU -->
			<li class="">
				<a href="javascript:;">
					<i class="fa fa-folder-open"></i>
					<span class="title">Configuraciones</span>
					<span class="arrow"></span>
				</a>				
			</li>
			<!-- END TWO LEVEL MENU -->			
		</ul>
		<!-- END SIDEBAR MENU -->
		<!-- BEGIN SIDEBAR WIDGETS -->		
		<div class="clearfix"></div>
		<!-- END SIDEBAR WIDGETS --> 
	</div>
</div>