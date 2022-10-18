<html>
    <head>
        <title>Ejercicio 5</title>
    </head>
    <body>
        <form action="ejercicio5.php">
            <p>Escriba el numero de asteriscos: <input type="number" name="asterisco"></p>
            <p><input type="submit" value="Enviar"></p>
            <?php
                if(isset($_REQUEST["asterisco"])){
                    $asterisco = (int)($_REQUEST["asterisco"]);
                    if(is_numeric($asterisco) && $asterisco>=1){
                        $j=0;
                        echo "<p>";
                        for($i=1;$i<=$asterisco;$i++){
                            $j++;
                            if($j == 110){
                                echo "<br/>";
                            }
                            echo "*"; 
                        }
                        echo "</p>";
                    }
                }
            ?>
        </form>
    </body>
</html>