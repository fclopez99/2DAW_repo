<html>
    <head>
        <title>Valores recogidos de formulario</title>
    </head>
    <body>
        <?php
        if(
        isset($_REQUEST["numero"])){
            $numero = $_REQUEST["numero"];
            }
            $tipo="";
        
        if (is_int($numero)){
            $tipo = "entero";
        }
        if (is_float($numero)){
            $tipo = "decimal";
        }
        echo "El número $numero es $tipo";
        ?>
    </body>
</html>