<html>
    <head>
        <title>Exercicio 2</title>
    </head>
    <body>
    <form action="Ex2.php" method="post">
       <?php
       $array=[
        "Barcelona"=>79,
        "Atletico de Madrid"=>86,
        "Real Madrid"=>84,
        "Eibar"=>30,
        "Osasuna"=>44,
        "Betis"=>61,
        "Granada"=>46,
        "Levante"=>41,
        "Getafe"=>38,
        "Alaves"=>38,
        "Cadiz"=>44,
        "Valencia"=>43,
        "Elche"=>36,
        "Celta de Vigo"=>53,
        "Villareal"=>58,
        "Huesca"=>34,
        "Athletic"=>46,
        "Valladolid"=>31,
        "Real Sociedad"=>62,
        "Sevilla"=>77
       ];
       echo '<select name="clasificacion" id="clasificacion">';
       foreach($array as $equipo => $puntos){
        echo '<option value="'.$equipo.'">'.$equipo."</option>";
       }
       echo '</select><br><br>';
       arsort($array);
       $clasificacion=array_keys($array);
       if(isset($_POST["clasificacion"])){
        $nombre=$_POST["clasificacion"];
        $puntos=$array["$nombre"];
        $posicion=array_search($_POST["clasificacion"],$clasificacion)+1;
        echo "O equipo $nombre ten $puntos puntos e encontranse na posicion $posicion º.<br>";
       }
       ?>
       <input type="submit" value="Comprobar"/>
       </form>
    </body>
</html>