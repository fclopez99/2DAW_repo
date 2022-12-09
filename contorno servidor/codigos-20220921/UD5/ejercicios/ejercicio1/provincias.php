<?php
if(isset($_GET["comunidad"])==false){
    header("Location: comunidades.php");
}
?>
<html>
    <head>
        <title>Elección de provincias.</title>
    </head>
    <body>
        <?php
            $mysqli = new mysqli("127.0.0.1","root","","geografia");
            if($mysqli){
                $comunidad = $_GET["comunidad"];
                $sql="SELECT p.nombre provincia, c.nombre comunidad ".
                "FROM provincias p JOIN comunidades c USING(id_comunidad) ".
                "WHERE c.nombre='$comunidad' ".
                "ORDER BY provincia";
                $res = $mysqli->query($sql);
                if($res){
        ?>

        <form action="localidades.php">
            <label for="provincia">Elija la provincia: </label>
            <select name="provincia" id="provincia">
                <?php
                    $fila = $res->fetch_assoc();
                    while($fila){
                        echo "<option value='{$fila["provincia"]}'>".
                        "{$fila["provincia"]}</option>";
                        $fila = $res->fetch_assoc();
                    }
                ?>
            </select>
            <button>Realizar busqueda</button>
        </form>
        <?php
                }else{
                    echo "<p class='error'>No se pudo obtener la lista de localidades<p>";
                }
            }
        ?>
    </body>
</html>