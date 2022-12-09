<html>
    <head>
        <title>Elección de comunidades autónomas.</title>
    </head>
    <body>
        <?php
        $mysqli = new mysqli("127.0.0.1","root","","geografia");
        if($mysqli){
            $res = $mysqli->query("SELECT nombre FROM comunidades ORDER BY nombre");
            if($res){
        ?>

        <form action="provincias.php">
            <label for="comunidad">Elija la comunidad: </label>
            <select name="comunidad" id="comunidad">
                <?php
                $fila = $res->fetch_assoc();
                while($fila){
                    echo "<option value='{$fila["nombre"]}'>"."{$fila["nombre"]}</option>";
                    $fila = $res->fetch_assoc();
                }
                ?>
            </select>
            <button>Realizar busqueda</button>
        </form>
        <?php
            }else{
                echo "<p class='error'>No se pudo obtener la lista de provincias<p>";
            }
        }
        ?>
    </body>
</html>