<?php 
    session_start();
    require("conexion.php");
    $usuario = $_SESSION["usuario"];
?>
<html>
    <head>
        <title>Rexistrar Categorías</title>
    </head>
    <body>
        <?php
            echo "<hr>Usuario: $usuario <hr>";
            echo "<a href='categorias.php'>Home</a> <a href='carrito.php'>Ver Carrito</a> <a href='Vaciar_Carro.php'>Vaciar Carro</a> <a href='Rex_Categorias.php'>Rexistro Categorias</a> <a href='Rex_Productos.php'>Rexistrar Productos</a> <a href='Rex_Users.php'>Rexistrar Usuarios</a> <a href='logout.php'>Cerrar sesión</a><hr>";
        ?>
        <form method='post'>
            <label for='nombre_cat'>Nombre de la categoría: </label>
            <input type='text' name='nombre_cat' required='' placeholder='Categoría' id='nombre_cat'>
            <label for='desc_cat'>Descripción de la categoría: </label>
            <input type='text' name='desc_cat' required='' placeholder='Descripción' id='desc_cat'>
            <input type="checkbox" id="activo" class="activo">
            <input type='submit' id='enviar' class='enviar' value='Enviar'>
            <input type='button' id='Borrar' class='Borrar' value='Borrar'> 
            <input type="button" id="Modificar" class="Modificar" value="Actualizar">
            
        </form>
    </body>
</html>