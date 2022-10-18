<html>
    <head>
        <title>ejercicio 04_01</title>
    </head>
    <body>
        <h2 style="background-color:lightgrey">Bar Baio</h2>
        <form action="visitantes.php" method="POST">
            <label for="name">Nome* :</label>
            <input type="text" id="nome" name="nome"><br><br>
            <label for="mail">Mail :</label>
            <input type="text" id="mail" name="mail"><br><br>
            <label for="mensaje">Mensaxe :</label>
            <textarea type="text" id="mensaje" name="mensaje"></textarea><br><br>
            <label for="enviar"></label>
            <input type="submit" id="enviar" name="enviar">
            <label for="borrar"></label>
            <input type="reset" id="borrar" name="borrar"><br>
        </form>
        <br>
        <h2>Mensaxes deixados polo usuario :</h2>
        <br>

        <?php 
        $fichero = "visitantes.txt";
        if(file_exists($fichero)){
            $archivo = fopen($fichero,"r");
            $contenido = fread($archivo, filesize($fichero));
            fclose($archivo);

            $lineas = explode("-", $contenido);
            krsort($lineas);
            echo "<table>";

            foreach($lineas as $linea){
                echo "<tr>";
                echo "<td>".$linea."</td>";
                echo "</tr>";
            }
            
            echo "<hr>";
            echo "</table>";
        }

        ?>
    </body>
</html>