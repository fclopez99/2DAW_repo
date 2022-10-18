<html>
    <head>
        <title>Ejercicio 02_03</title>
        
    </head>
    <body>
        
        <?php
        $top = 0;
        for ($j=0;$j<=10;$j++){
            for ($i = 0;$i<=10;$i++){
                $red = mt_rand(0,255);
                $blue = mt_rand(0,255);
                $green = mt_rand(0,255);
            
                $arraycolor[$i]="background-color:rgb($red,$green,$blue); top:$top%";
                print "<p style=".$arraycolor[$i].">-</p>";
                $top ++;
            }
        }
        ?>

        
    </body>
</html>