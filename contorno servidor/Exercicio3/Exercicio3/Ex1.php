<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercicio 1</title>
</head>
<body>
<?php
$suma=0;
echo "<h1>Factura</h1><br>";
foreach($_REQUEST as $array){
    foreach($array as $objeto=>$precio){
        $precio=floatval($precio);
        $suma=$suma+$precio;
        echo "$objeto:$precio<br>";
    }
}
echo "Total:$suma";
?>  
</body>
</html>