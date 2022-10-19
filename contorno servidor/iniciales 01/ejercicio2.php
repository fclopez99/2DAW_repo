<html>
    <head>
        <title>Valores recogidos de formulario</title>
    </head>
    <body>
        <?php
        if(isset($_REQUEST["nombre"])&&
        isset($_REQUEST["apellidos"])&&
        isset($_REQUEST["edad"])&&
        isset($_REQUEST["salario"])){
            $nombre = (isset($_REQUEST["nombre"]))
    ? htmlspecialchars(trim(strip_tags($_REQUEST["nombre"])), ENT_QUOTES, "UTF-8")
    : "";
            $edad = (int)($_REQUEST["edad"]);
            $apellidos = (isset($_REQUEST["apellidos"]))
    ? htmlspecialchars(trim(strip_tags($_REQUEST["apellidos"])), ENT_QUOTES, "UTF-8")
    : "";
            $salario = $_REQUEST["salario"];
        }

        
        if ($salario >= 1000 && $salario <= 2000){
            if ($edad > 45){
                $salario=($salario +($salario*0.03));
            }
            else if ($edad <= 45){
                $salario=($salario +($salario*0.1));
            }
        }
        else if ($salario < 1000){
            if ($edad < 30){
                $salario=$salario = 1100;
            }
            else if ($edad >= 30 && $edad <= 45){
                $salario=($salario +($salario*0.03));
            }
            else if ($edad > 45){
                $salario=($salario+($salario*0.15));
            }
        }
        echo "$nombre $apellidos, tu salario será de $salario";
        ?>
    </body>
</html>