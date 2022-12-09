
<?php
function comprobar_usuario($username, $password){
	if($username === "usuario" and $password === "1234"){
		$usu['nombre'] = "usuario";
		return $usu;
	}elseif($username === "admin" and $password === "1234"){
		$usu['nombre'] = "admin";
		return $usu;
	}else return false;
}
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	$usu = comprobar_usuario($_POST['username'], $_POST['password']);
	if($usu==false){
		$err = true;
		$usuario = $_POST['username'];
	}else{	
        session_start();
		$_SESSION['usuario'] = $_POST['username'];
		header("Location: restrinxida.php");	
	}
	
}
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Formulario de login</title>		
		<meta charset = "UTF-8">
	</head>
	<body>	
		
		<?php if(isset($_GET["redirigido"])){
			echo "<p>Haga login para continuar</p>";
		}?>
		<?php if(isset($err) and $err == true){
			echo "<p> revise usuario y contraseña</p>";
		}?>
        <form action = "<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="POST">
            <label for="username">Nombre de usuario: </label>
            <input type="text" name="username" id="username"/><br/>
            <label for="password">Contraseña: </label>
            <input type="password" name="password" id="password"/><br/>
            <button>Enviar</button>
        </form>
    </body>
</html>