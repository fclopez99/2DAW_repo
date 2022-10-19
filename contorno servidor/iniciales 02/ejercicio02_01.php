<html>
    <head>
        <title>Ejercicio 02_01</title>
    </head>
    <body>
        <form action="ejercicio02_01.php" method="POST">
            <p><input type="checkbox" name="articulo['boligrafo rojo']" value="0.35">Bolígrafo Rojo (35 céntimos)</p>
            <p><input type="checkbox" name="articulo['boligrafo azul']" value="0.35">Bolígrafo Azul (35 céntimos)</p>
            <p><input type="checkbox" name="articulo['lapicero grueso']" value="0.27">Lapicero Grueso (27 céntimos)</p>
            <p><input type="checkbox" name="articulo['lapicero fino']" value="0.30">Lapicero Fino (30 céntimos)</p>
            <p><input type="checkbox" name="articulo['goma de borrar']" value="0.35">Goma de Borrar (35 céntimos)</p>
            
            <p><input type="submit" value="Enviar"></p>
        
        </form>
        <?php
            $articulo= $_POST["articulo"];
            $precio_total = 0;
            echo "<h1>Artículos comprados</h1>";
            foreach ($articulo as $indice => $valor){
                echo "<li>".$indice." , precio: ".$valor."€</li>";
                $precio_total = $precio_total + $valor;
            }
            echo "<br><strong>Total: ".$precio_total."€</strong>";

        ?>
    </body>
</html>