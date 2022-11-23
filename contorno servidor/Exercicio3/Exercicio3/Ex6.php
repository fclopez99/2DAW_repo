<html>
    <head>
        <title>Exercicio 6</title>
    </head>
    <body>
        <?php
            $texto=$_REQUEST["texto"];
        if(isset($_REQUEST["opcion"])){
            $opcion=$_REQUEST["opcion"];
        }else{
            echo "No has ecogido una funcion";
        }
        if(isset($_REQUEST["clave"]) && $_REQUEST["clave"]>0 && $_REQUEST["clave"]<100){
            $clave=$_REQUEST["clave"];
        }else{
            echo "Variable no definida o la clave es mayor que 99 o menor que 1";
        }
        $letras=strlen($texto);
        if($opcion=="encriptar"){
        for($i=0;$i<$letras;$i++){
            if($texto[$i]!=' '){
                $texto[$i]=chr(ord($texto[$i])+$clave);
            }
        }
        echo "El texto encriptado es $texto";
        }
        if($opcion=="desencriptar"){
            for($i=0;$i<$letras;$i++){
                if($texto[$i]!=' '){
                    $texto[$i]=chr(ord($texto[$i])-$clave);
                }
            }
            echo "El texto desencriptado es $texto"; 
        }
        ?>
        <br>
        <a href="Ex6.html">Volver a encriptar</a>
    </body>
</html>