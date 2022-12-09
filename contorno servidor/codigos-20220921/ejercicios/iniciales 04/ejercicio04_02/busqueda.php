<?php
if (file_exists("datos.txt")){
    
    if(isset($_POST["dni"])){
            $dni = $_POST["dni"];
    }
    $encontrado = 0;
    $lineas = file("datos.txt");
    $patron = '/[0-9]{8}[A-Z]$/';
    if(preg_match($patron, $dni)){
        foreach($lineas as $linea){
            if(strstr($linea, $dni)){
                echo "Foi encontrado o DNI: $dni na posición $encontrado";
                echo "<br><a href=\"BuscarNota.html\" title=\"Volver\">Volver</a>";
                $encontrado++;
            }
        }
        if($encontrado == 0){
            echo "O DNI ".$dni." aínda non conta con nota asignada";
        }
    }
}
?>