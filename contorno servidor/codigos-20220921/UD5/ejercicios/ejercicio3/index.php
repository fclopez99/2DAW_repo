<?php
    function comprobar_usuario($username, $password){
        $usuario = substr($_POST["usuario"],0,30);
        $password = substr($_POST["password"],0,30);
        $mysqli = new mysqli("127.0.0.1","root","","usuarios");
        if($mysqli){
            $res = $mysqli->query("SELECT usuario, pass FROM usuarios WHERE usuario='$usuario'");
            if($res){
                $fila = $res->fetch_assoc();
                while($fila){
                    echo "<ul>De: {$fila["id_remite"]}"."<br>{$fila["texto"]}</ul>";
                    $fila = $res->fetch_assoc();
                }
            }
            else{
                echo "<p class='error'>No hay mensajes<p>";
            }
        }

        if($username === "usuario" and $password === "1234"){
            $usu['usuario'] = "usuario";
            return $usu;
        }elseif($username === "admin" and $password === "1234"){
            $usu['usuario'] = "admin";
            return $usu;
        }else return false;
    }
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $usu = comprobar_usuario($_POST['usuario'], $_POST['contraseña']);
        if($usu==false){
            $err = true;
            $usuario = $_POST['usuario'];
        }else{	
            session_start();
            $_SESSION['usuario'] = $_POST['usuario'];
            header("Location: buzon.php");	
        }        
    }
?>
<html>
    <head>
        <title>Entrada de servicio de mensajer&iacute;a</title>
    </head>
    <body>
        <h1>Conexi&oacute;n con el servicio de mensajer&iacute;a</h1>
        <h3>Entrar en la cuenta</h3>
        <form id="validar" method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
            <label for="usuario">Usuario: </label>
            <input type="text" name="usuario" id="usuario">
            <br>
            <label for="password">Contrase&ntilde;a: </label>
            <input type="password" name="password" id="password">
            <br>
            <button>Validar</button>
        </form>
        <h3>Nuevo usuario</h3>
        <form id="alta_usuario" method="post" action="buzon.php">
            <label for="usuario">Usuario: </label>
            <input type="text" name="usuario" id="usuario">
            <br>
            <label for="password">Contrase&ntilde;a: </label>
            <input type="password" name="password" id="password">
            <br>
            <label for="password_rep">Contrase&ntilde;a: </label>
            <input type="password" name="password_rep" id="password_rep">
            <br>
            <button>Alta de usuario</button>
        </form>
        
    </body>
</html>