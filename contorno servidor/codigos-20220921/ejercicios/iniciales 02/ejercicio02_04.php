<html>
    <head>
        <title>Ejercicio 02_04</title>
        <style>
            .cabeceira{
                background-color: black;
                color: white;
            }
            .indice{
                background-color: grey;
            }
        </style>
    </head>
    <body>
        
        <?php
        $ciudades = array(
            "Palencia"=>8000,
            "Valladolid"=>306000,
            "Murcia"=>439000,
            "Albacete"=>170000,
            "Barcelona"=>160000,
            "A Coruña"=>25000,
        );

        $elementos= array(
            "Au"=>"Oro",
            "Ag"=>"Plata",
            "Hg"=>"Mercurio",
            "H"=>"Hidrógeno",
        );

        function dibujar($array){
            echo "<table border=1>";
            echo "<tr>";
            for($i=0;$i<1;$i++){
                echo '<th class="cabeceira">Código</th>';
                echo '<th class="cabeceira">Valor</th>';
            }
            echo "</tr>";
            foreach($array as $i=>$v){
                echo "<tr>";
                echo '<td class="indice">'.$i.'</td>';
                echo "<td>$v</td>";
                echo "</tr>";
            }
            echo "</table>";
        };

        dibujar($ciudades);
        echo "<br>";
        dibujar($elementos);

        ?>
    </body>
</html>