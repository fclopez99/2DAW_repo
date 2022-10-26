<html>
    <head>
        <title>Cargado de imagenes aleatorias con php</title>
    </head>
    <body>
        <?php
        
        $dato = mt_rand(0,1);
        if ($dato == 0){
            $ruta = "img/imagen0.jpg";
        }
        else {
            $ruta = "img/imagen1.jpg";
        }
        ?>

        <img src=" <?php echo $ruta; ?> ">
    </body>
</html> 

