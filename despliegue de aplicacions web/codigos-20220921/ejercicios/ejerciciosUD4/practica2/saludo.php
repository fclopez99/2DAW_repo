<?php
include "comprobar.php";
$hayPreferencias=true;
$array=null;
if(hayCookie()==false){
    if(hayGet()==false){
        $hayPreferencias=false;
    }
    else{
        $array=$_GET;
    }
}
else{
    $array=$_COOKIE;
}
if($hayPreferencias==false)
    header("location:index.php");
else{
    foreach($array as $indice=>$valor){
        $$indice=$valor;
    }
    setcookie("nombre",$nombre,time()+60*60*24);
    setcookie("apellidos",$apellidos,time()+60*60*24);
    setcookie("color_fondo",$color_fondo,time()+60*60*24);
    setcookie("color_letra",$color_letra,time()+60*60*24);
    setcookie("tipo_letra",$tipo_letra,time()+60*60*24);
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