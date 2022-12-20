<?php 
    session_start();
    require("conexion.php");
    $usuario = $_SESSION["usuario"];
?>
<html>
    <head>
        <title>Lista de Productos</title>
    </head>
    <body>
        <?php
        echo "<hr>Usuario: $usuario <hr>";
        echo "<a href='categorias.php'>Home</a> <a href='carrito.php'>Ver Carrito</a> <a href='Vaciar_Carro.php'>Vaciar Carro</a> <a href='Rex_Categorias.php'>Rexistro Categorias</a> <a href='Rex_Productos.php'>Rexistrar Productos</a> <a href='Rex_Users.php'>Rexistrar Usuarios</a> <a href='logout.php'>Cerrar sesión</a><hr>";
        
        if($con){
            $codCat = $_GET["codCat"];
            $sql = "select * from productos where CodCat  = $codCat";
            $consulta = mysqli_query($con, $sql);
            if($consulta){
                $fila = $consulta->fetch_assoc();
                echo "<h2>Lista de Categorías</h2>";
                while($fila){
                    echo "<li>"."<a href='productos.php/categoria=".$fila["codProd"]."'>".$fila["nombre"]."</a></li>";
                    $fila = $consulta->fetch_assoc();
                }
            }
        }
        ?>
    </body>
</html>