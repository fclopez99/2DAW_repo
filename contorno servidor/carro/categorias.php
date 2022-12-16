<?php 
    session_start();
    require("conexion.php");
    $usuario = $_SESSION["usuario"];
?>
<html>
    <head>
        <title>Lista de categorías</title>
    </head>
    <body>
        <?php
        echo "<hr>Usuario: $usuario <hr>";
        echo "<a href='categorias.php'>Home</a> <a href='carrito.php'>Ver Carrito</a> <a href='Vaciar_Carro.php'>Vaciar Carro</a> <a href='Rex_Categorias.php'>Rexistro Categorias</a> <a href='Rex_Productos.php'>Rexistrar Productos</a> <a href='Rex_Users.php'>Rexistrar Usuarios</a> <a href='logout.php'>Cerrar sesión</a><hr>";
        
        $sql = "select codCat, nombre from categorias";
        $resul = $con->query($sql);	
        if (!$resul) {
            return FALSE;
        }
        if ($resul->rowCount() === 0) {    
            return FALSE;
        }
        return $resul;
        ?>
    </body>
</html>