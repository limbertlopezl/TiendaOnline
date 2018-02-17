<?php 

if (isset($_POST['Contrasena']) && isset ($_POST['Usuario']) ) {
		include("Conexion.php");
		
		$user=$_POST['Usuario'];
		$pass=$_POST['Contrasena'];
		$cx=conectar();	
		$query="SELECT t.idTienda,t.nombre as tienda, t.Ubicacion_idUbicacion as idUbicacion 
		FROM comerciante c,tienda t 
		WHERE c.idComerciante=t.Comerciante_idComerciante
		 AND password='{$pass}' AND user='{$user}'";
		//idecho $query;
		$resultado=mysqli_query($cx,$query);		
		desconectar($cx);		
		
		if (($resultado->num_rows) > 0) {
				while ($row = mysqli_fetch_assoc($resultado)) {
				$output[]=$row;				
				}				

				if (isset($_POST['Movil']) && $_POST['Movil'] == "android") {
					print(json_encode($output));
					exit;				
				}
				print(json_encode($output));
			
		}else{				

			if (isset($_POST['Movil']) && $_POST['Movil'] == "android") {
				echo "Falla";
				exit;				
			}
				echo "Falla";
		}
}	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
<body>
	<h1>prueba login</h1>
	<form action="<?php $_PHP_SELF ?>" method="post">
	Usuario:  <input type="text" name="Usuario" value="" /> <br/>
	Contrasena:  <input type="text" name="Contrasena" value="" /> <br/>	
	<input type="submit" name="btnSubmit" value="Login">
		
	</form>
</body>
</html>