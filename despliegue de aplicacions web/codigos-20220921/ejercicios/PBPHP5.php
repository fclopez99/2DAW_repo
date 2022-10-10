<html>
    <head>
        <title>Tabla de multiplicar con php</title>
    </head>
    <body>
        <table border="1">
            <?php
            echo "<th style=\"background-color:yellow\">X</th>";
            for ($j=1;$j<11;$j++){
                echo "<th style=\"background-color:blue\">".$j."</th>";
            }
            ?>

            <?php
            for($x=1;$x <= 10;$x++){
                echo "<tr>";
                echo "<th style=\"background-color:green\">".$x."</th>";
                for($y=1;$y <= 10;$y++){
                    $resultado = $x*$y;
                    echo "<td>$resultado</td>";
                }
                echo "</tr>";
            }
            ?>

        </table>
    </body>
</html>