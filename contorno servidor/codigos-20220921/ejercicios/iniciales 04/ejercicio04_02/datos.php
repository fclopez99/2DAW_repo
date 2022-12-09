<?php 
    $fichero = "datos.txt";
    if(file_exists($fichero)){
        $archivo = fopen($fichero,"r");
        if (!filesize($fichero)==0) {
        $contenido = fread($archivo, filesize($fichero));
        fclose($archivo);

        $lineas = explode("--------------------------", $contenido);
        krsort($lineas);
        
        echo "<hr>";
        echo "<table>";

        foreach($lineas as $linea){
            echo "<tr>";
            echo "<td>".$linea."</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "<hr>";
        
        }
        else{
            echo "<hr>";
            echo "<h3 style=\"text-align: center\">Non hai datos almacenados</h3>";
        }
    }
?>