<html>
    <head>
        <title>Exercicio 5</title>
    </head>
    <body>
        <?php
        $patronNombre="/(^[a-z]|^[A-Z])+([a-z]*|[A-Z]*)+([a-z]$|[A-Z]$)/";
        $patronUsername="/(^[a-z]|^[A-Z])+([a-z]*|[A-Z]*|[a-z]?|[A-Z]?|([0-9]*)|([0-9]?))+([a-z]$|[A-Z]$|([0-9])$)/";
        $patronDNI="/([0-9]{8}+([a-z]|[A-Z]))/";
        $patronNIE="/([^XYZ]+[0-9]{7}+([a-z]|[A-Z]))/";
        $patronTelefono="/(\d)/";
        $nombre=$_REQUEST["nombre"];
        $primerApellido=$_REQUEST["primerApellido"];
        $segundoApellido=$_REQUEST["segundoApellido"];
        $username=$_REQUEST["username"];
        if(preg_match($patronDNI,$_REQUEST["DNI"])){
            $dni=$_REQUEST["DNI"];
        }else{
            if(preg_match($patronNIE,$_REQUEST["DNI"])){
                $nie=$_REQUEST["DNI"];
            }else{
                echo "DNI o NIE no estan bien definidos.<br>";
            }
        }
        $telefono=$_REQUEST["telefono"];
        
        if(preg_match($patronNombre,$nombre)){
            echo "El nombre es correcto<br>";
        }else{
            echo "El nombre no es correcto<br>";
        }
        if(preg_match($patronNombre,$primerApellido)){
            echo "El primer apellido es correcto<br>";
        }else{
            echo "El primer apellido no es correcto<br>";
        }
        if(preg_match($patronNombre,$segundoApellido)){
            echo "El segundo apellido es correcto<br>";
        }else{
            echo "El segundo apellido no es correcto<br>";
        }
        if(preg_match($patronUsername,$username)){
            echo "El nombre de usuario es correcto<br>";
        }else{
            echo "El nombre de usuario no es correcto<br>";
        }
        if(isset($dni)){
            $numeros = substr($dni, 0, -1);
            $letra = substr($dni, -1);
            $letra= strtoupper($letra);
            if(substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra){
                echo "El DNI y la letra son correctos<br>";
            }else{
                echo "La letra no es correcta<br>";
            }
        }
        if(isset($nie)){
            switch ($nie[0]) {
                case 'X':
                    $nie[0]='0';
                    $numeros = substr($nie, 0, -1);
                    $letra = substr($nie, -1);
                    $letra= strtoupper($letra);
                    if(substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra){
                        echo "El NIE y la letra son correctos<br>";
                    }else{
                    echo "La letra no es correcta<br>";
                    }
                    break;
                case 'Y':
                    $nie[0]='1';
                    $numeros = substr($nie, 0, -1);
                    $letra = substr($nie, -1);
                    $letra= strtoupper($letra);
                    if(substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra){
                        echo "El NIE y la letra son correctos<br>";
                    }else{
                    echo "La letra no es correcta<br>";
                    }
                    break;
                case 'Z':
                    $nie[0]='2';
                    $numeros = substr($nie, 0, -1);
                    $letra = substr($nie, -1);
                    $letra= strtoupper($letra);
                    if(substr("TRWAGMYFPDXBNJZSQVHLCKE", $numeros%23, 1) == $letra){
                        echo "El NIE y la letra son correctos<br>";
                    }else{
                    echo "La letra no es correcta<br>";
                    }
                    break;
            }
        }
        if(preg_match($patronTelefono,$telefono)){
            echo "El telefono es correcto.<br>";
        }else{
            echo "El telefono esta mal.Recuerda:el telefono son solo numeros.<br>";
        }
        ?>
    </body>
</html>