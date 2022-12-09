<html>
    <head>
        <title>Ejercicio 8</title>
    </head>
    <body>
        <form action="ejercicio8.php">
            <p>Escriba un número entero: <input type="number" name="num"></p>
            
            <p><input type="submit" value="Enviar"></p>
        
        </form>
            <?php
                if(isset($_REQUEST["num"])){
                    $numero = $_REQUEST["num"];
                    $suma =0;
                    
                        for($i=0;$i<$numero;$i++){
                            if(($i%2)==0){
                            $suma=$suma+$i;
                            }
                        }
                    echo $suma;
                }
            ?>
    </body>
</html>