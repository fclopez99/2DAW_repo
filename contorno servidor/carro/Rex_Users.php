<?php 
    session_start();
    require("conexion.php");
    $usuario = $_SESSION["usuario"];
?>
<html>
    <head>
        <title>Rexistrar Productos</title>
    </head>
    <body>
        <?php
            echo "<hr>Usuario: $usuario <hr>";
            echo "<a href='categorias.php'>Home</a> <a href='carrito.php'>Ver Carrito</a> <a href='Vaciar_Carro.php'>Vaciar Carro</a> <a href='Rex_Categorias.php'>Rexistro Categorias</a> <a href='Rex_Productos.php'>Rexistrar Productos</a> <a href='Rex_Users.php'>Rexistrar Usuarios</a> <a href='logout.php'>Cerrar sesión</a><hr>";
        ?>

        <from method="post">
            <label for='correo'>Nombre de usuario: </label>
            <input type='text' name='correo' required='' placeholder='Nombre' id='correo'>
            <label for='clave'>Contraseña: </label>
            <input type='password' name='clave' required='' placeholder='Contraseña' id='clave'>
            <label for="pais">Pais:</label>
            <input type="text" id="pais" class="pais">
            <label for="cp">CP:</label>
            <input type="number" id="cp" class="cp">
            <label for="ciudad">Ciudad:</label>
            <input type="text" id="ciudad" class="ciudad">
            <label for="direccion">Direccion:</label>
            <input type="text" id="direccion" class="direccion">
            <input type='submit' id='crear' class='crear' value='Crear'>
            <input type='button' id='Borrar' class='Borrar' value='Borrar'> 
            <input type="button" id="Modificar" class="Modificar" value="Actualizar">
        </from>
        
    </body>
</html>