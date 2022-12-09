<?php
if(isset($_GET["provincia"])==false){
    header("Location: provincias.php");
}
?>
<html>
    <head>
        <title>Elección de localidades.</title>
    </head>
    <body>
        <?php
            $mysqli = new mysqli("127.0.0.1","root","","geografia");
            if($mysqli){
                $provincia = $_GET["provincia"];
                $sql="SELECT l.nombre localidad ".
                "FROM localidades l JOIN provincias p USING(n_provincia) ".
                "WHERE p.nombre='$provincia' ".
                "ORDER BY localidad";
                $res = $mysqli->query($sql);
                if($res){
        ?>

        <form action="localidades.php">
            <label for="localidad">Elija la localidad: </label>
            <select name="localidad" id="localidad">
                <?php
                    $fila = $res -> fetch_assoc();
                    while($fila){
                        echo "<option value='{$fila["localidad"]}'>"."{$fila["localidad"]}</option>";
                        $fila = $res->fetch_assoc();
                    }
                ?>
            </select>
            <?= "<input type='hidden' name='provincia' value='$provincia'>" ?>
            <button>Realizar busqueda</button>
        </form>
        
        <?php
                }else{
                    echo "<p class='error'>No se pudo obtener la lista de localidades<p>";
                }
                if(isset($_GET["localidad"])){
                    $localidad = $_GET["localidad"];
                    $sql = "SELECT poblacion FROM localidades l WHERE l.nombre='$localidad'";
                    $res = $mysqli->query($sql);
                    if ($res->num_rows == 0){
                        echo "<p class='error'>No hai resultados</p>";
                    }
                    $fila = $res -> fetch_assoc();
                    if($res){
                        echo "La localidad $localidad tiene una población de ".$fila["poblacion"];
                    }
                }
            }
        ?>
    </body>
</html>