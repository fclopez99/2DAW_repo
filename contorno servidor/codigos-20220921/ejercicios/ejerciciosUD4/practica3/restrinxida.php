<?php 
	session_start();
	if(!isset($_SESSION['usuario'])){	
		header("Location: autentificacion.php?redirigido=true");
	}	
	?>
<!DOCTYPE html>
<html>
	<head>
		<title>P&aacute;xina restrinxida</title>
		<meta charset = "UTF-8">
	</head>
	<body>		
		<?php echo "<h1 style=\"color='red';\">Entraches na páxina restrinxida</h1>";?>
		<br><a href = "logout.php"> Salir <a>
	</body>
</html>