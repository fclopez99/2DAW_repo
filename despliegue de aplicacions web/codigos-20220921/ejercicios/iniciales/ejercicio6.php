<html>
    <head>
        <title>Ejercicio 6</title>
    </head>
    <body>
        <form action="ejercicio6.php">
            <p>Escriba el n&uacute;mero de columnas: <input type="number" name="columnas"></p>
            <p>Escriba el n&uacute;mero de filas: <input type="number" name="filas"></p>

            <p><input type="submit" value="Enviar"></p>
        
        </form>
            <?php
                if(isset($_REQUEST["columnas"])&&
                isset($_REQUEST["filas"])){
                    $columna = (int)($_REQUEST["columnas"]);
                    $fila = (int)($_REQUEST["filas"]);
                    
                    if($columna>=1){
                        echo "<table border=1>";
                        for ($i = 1; $i <= $fila ; $i++) {
                            echo "<tr>";
                                for($j = 1; $j <= $columna; $j++){
                                    echo "<td>&nbsp;</td>";
                                }
                            echo "<tr>";
                        }
                        echo "</table>";
                    }
                }
            ?>
    </body>
</html>