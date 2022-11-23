<html>
    <head>
        <title>Exercicio 7</title>
    </head>
    <body>
        <?php
        $arrayNumero=[];
        $listaNumeros=[];
        $i=0;
        while(count($listaNumeros)<100){
            for($j=0;$j<6;$j++){
                $n=mt_rand(0,100);
                $arrayNumero[$j]=$n;
            }
            $listaNumeros[]=$arrayNumero;
            for($i=0;$i<count($listaNumeros)-1;$i++){
                $count=0;
                $coincidencias=array_intersect($arrayNumero,$listaNumeros[$i]);
                $count=count($coincidencias);
                if($count!=6){
                    $listaNumeros[count($listaNumeros)-1]=$arrayNumero;
                }
            }
        }
        for($i=0;$i<100;$i++){
            $arrayNumero=$listaNumeros[$i];
            echo "Combinacion ".intval($i+1)."<br>";
            for($j=0;$j<6;$j++){
                echo $arrayNumero[$j]."  ";
            }
            echo "<br>";
        }
        
        ?>
    </body>
</html>