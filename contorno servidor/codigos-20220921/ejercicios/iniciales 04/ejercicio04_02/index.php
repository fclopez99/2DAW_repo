<?php
    $archivo = fopen("datos.txt", 'a') or die ("ERROR al abrir el archivo");
    if(isset($_POST['registrar'])){
        if( isset($_POST['dni'])&&
            isset($_POST['nota'])){
                $dni = $_POST['dni'];
                $nota = $_POST['nota'];
            }
    }

    $d = date ( "d/m/Y H:i:s" );
    $page = "";
    $page = "DNI: <b>$dni</b><b> - Nota: </b>$nota<b> Fecha:</b> $d<br>"."\n"." --------------------------"."\n";
    echo $page;
    fwrite($archivo, "$page", strlen("$page"));
    fclose($archivo);
    echo "<div align='center'>Os datos foron gardados de forma correcta.<br>";
    echo "<a href='index.html' title='Volver'>Volver</a></div>";
?>