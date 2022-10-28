<?php

include "comprobar.php";
$hayPreferencias=true;
$array=null;
if(haySesion()==false){
    if(hayGet()==false){
        $hayPreferencias=false;
    }
    else{
        $array=$_GET;
    }
}
else{
    $array=$_SESSION;
}
if($hayPreferencias==false)
    header("location:index.php");
else{
    foreach($array as $indice=>$valor){
        $$indice=$valor;
    }
    
    session_start();
    $_SESSION["nombre"]=$nombre;
    $_SESSION["apellidos"]=$apellidos;
    $_SESSION["color_fondo"]=$color_fondo;
    $_SESSION["color_letra"]=$color_letra;
    $_SESSION["tipo_letra"]=$tipo_letra;
}
?>
<!doctype html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Saludo</title>
    <link href='http://fonts.googleapis.com/css?family=Shadows+Into+Light|Slabo+27px|Roboto' rel='stylesheet' type='text/css'>
    <style>
        body{
            background-color:<?=$color_fondo?>;
            color:<?=$color_letra?>;
            font-family:<?=$tipo_letra?>;
        }
        a{
            background-color:white;
        }
    </style>
</head>
<body>
<h1>Hola <?="$nombre $apellidos"?></h1>

<p><a href="borrar.php">Volver a cambiar las preferencias</a></p>
</body>
</html>