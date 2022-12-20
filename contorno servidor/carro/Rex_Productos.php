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

        <?php ?>
        <form method='post'>
            <label for='nombre_prod'>Nombre del producto: </label>
            <input type='text' name='nombre_prod' required='' placeholder='Producto' id='nombre_prod'>
            <label for='desc_prod'>Descripción del producto: </label>
            <input type='text' name='desc_prod' required='' placeholder='Descripción' id='desc_prod'>
            <input type='submit' id='enviar' class='enviar' value='Enviar'>
            <input type='button' id='Borrar' class='Borrar' value='Borrar'> 
            <input type="button" id="Modificar" class="Modificar" value="Actualizar">
        </form>
        
        <?php ?>
        <from method="post">
            <label for='nombre_prod'>Nombre del producto: </label>
            <input type='text' name='nombre_prod' required='' placeholder='Producto' id='nombre_prod'>
            <label for='desc_prod'>Descripción del producto: </label>
            <input type='text' name='desc_prod' required='' placeholder='Descripción' id='desc_prod'>
            <label for="peso_prod">Peso del producto:</label>
            <input type="text" id="peso_prod" class="peso_prod">
            <label for="unidades">unidades:</label>
            <input type="number" id="unidades" class="unidades">
            <input type='submit' id='crear' class='crear' value='Crear'>
        </from>
        
    </body>
</html>