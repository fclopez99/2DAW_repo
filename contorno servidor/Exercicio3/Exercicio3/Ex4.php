<html>
    <head>
        <title>Exercicio 4</title>
        <style>
        #cabecera{
            background-color: black;
            color: white;
        }
        #index{
            background-color: lightgrey;
        }
        table,tr{
            border: 1px solid black;
        }
    </style>
    </head>
    <?php
        function tabla($array){
            if(is_array($array)){
                echo '<table><tr><th id="cabecera">Index</th><th id="cabecera">Value</th></tr>';
                foreach($array as $index=>$value){
                    echo '<tr><td id="index">'."$index</td><td>$value</td></tr>";
                }
                echo "</table>";
            }else{
                echo "La variable no es un array";
            }
        }
        ?>
    <body>
        <?php
            $tablaperiodica=[
                "Au"=>"Oro",
                "Ag"=>"Plata",
                "Hg"=>"Mercurio",
                "H"=>"Hidrógeno"
            ];
            $ciudades=[
                "Palencia"=>8000,
                "Valladolid"=>306000,
                "Murcia"=>439000,
                "Albacete"=>170000,
                "Barcelona"=>160000,
                "A Coruña"=>25000
            ];
            tabla($tablaperiodica);
            echo "<br>";
            tabla($ciudades);
        ?>
    </body>
</html>