<html>
    <head>
        <title>Cargado de imagenes aleatorias con php</title>
    </head>
        <?php
        $red = mt_rand(0,255);
        $green = mt_rand(0,255);
        $blue = mt_rand(0,255);
        
        ?>
    <body style="background-color:rgb(<?php echo $red.",".$green.",".$blue ?>)">
    
    </body>
</html> 