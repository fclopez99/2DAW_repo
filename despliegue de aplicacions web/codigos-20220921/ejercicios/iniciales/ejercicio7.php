<html>
    <head>
        <title>Ejercicio 7</title>
    </head>
    <body>
        <?php
                $columna = 5;
                $numeros = 1000;
                $j = 0;    
                
                echo "<table border=1>";
                echo "<tr>";
                for ($i = 1; $i <= $numeros ; $i++) {
                    if ($j==5) {
                        echo "</tr>";
                        echo "<tr>";
                        $j=0;
                    } 
                    $j++;
                    echo "<td>".$i."</td>";
                }
                echo "</table>";
                
            
        ?>
    </body>
</html>