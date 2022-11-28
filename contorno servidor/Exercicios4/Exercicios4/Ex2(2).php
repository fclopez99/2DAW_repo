<html>
    <head>
        <title>Exercicio 2</title>
        <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
        <?php
            $aleatorio=$_REQUEST["aleatorio"];
            $intentos=$_REQUEST["intentos"];
            $numero=$_REQUEST["numero"];
            if($numero<$aleatorio){
                $intentos++;
                echo "<p>El numero es mayor</p><br><p>Numero de intentos: $intentos</p><br><form action='Ex2(1).php' method='post'>
                <input type='hidden' name='aleatorio' value='$aleatorio'>
                <input type='hidden' name='intentos' value='$intentos'>
                <input type='submit' value='Intentar otra vez'>
            </form>";
                
            }else{
                if($numero>$aleatorio){
                    $intentos++;
                    echo "<p>El numero es menor</p><br><p>Numero de intentos: $intentos</p><br><form action='Ex2(1).php' method='post'>
                    <input type='hidden' name='aleatorio' value='$aleatorio'>
                    <input type='hidden' name='intentos' value='$intentos'>
                    <input type='submit' value='Intentar otra vez'>
                </form>";
                }else{
                    echo "Felicidades acertaches! O numero secreto era $aleatorio.<br><p>Necesitaches $intentos intentos</p><br><a href='Ex2(1).php'>Intentar outra vez</a>";
                }
            }
        ?>
    </body>
</html>