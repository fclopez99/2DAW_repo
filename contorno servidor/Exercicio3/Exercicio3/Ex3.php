<html>
    <head>
        <title>Exercicio 3</title>
        <style>
            div{
                position:fixed;
                width:100%;
                height:1%;
            }   
            body{
                margin:0;
                font-size:1px;
            }
        </style>
    </head>

    <?php
    for($i=0;$i<10;$i++){
        $rojo=rand(1,255);
        $azul=rand(1,255);
        $verde=rand(1,255);
        $arraycolor[$i]="background-color:rgb($rojo,$azul,$verde)";
    }
    ?>
    <body>
        <?php
        $cont=0;
        for($i=0;$i<10;$i++){
            for($j=0;$j<10;$j++){
                echo "<div style='$arraycolor[$j]; top:$cont%;'></div>";
                $cont++;
            }
        }
        ?>
    </body>
</html>