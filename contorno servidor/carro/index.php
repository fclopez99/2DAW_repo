<?php
    session_start();
    require("conexion.php");
    if(isset($_POST['usuario'],$_POST['password'])) {
        $usuario=$con->real_escape_string($_POST["usuario"]);
        $password=$con->real_escape_string($_POST["password"]);
        $sql="SELECT codRes FROM restaurantes
        WHERE correo='$usuario' AND clave='$password'";
        $filas=$con->query($sql);
        $fila=$filas->fetch_object();
        $con->close();

        if($fila) {
        $_SESSION["usuario"]=$usuario;
        $_SESSION["clave"]=$fila->$password;
        header("Location:categorias.php");
        }
    }
?>
<html>
    <head>
        <title>Formulario de autentificación</title>
    </head>
    <body>
        <form method="POST" >
            <label for="usuario">Usuario: </label>
            <input type='text' name='usuario' required='' placeholder='Usuario' id='usuario'>
            <label for="password">Clave: </label>
            <input type='password' name='password' required='' placeholder='Contrasinal' id='password'>
            <input type="submit" id="enviar" class="enviar" value="Enviar">
        </form>
        <span style='color: red'>
            <?php if(isset($sql)) echo "Erro na autentificación"; ?>
        </span>
    </body>
</html>