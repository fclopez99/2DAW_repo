<html>
    <head>
        <title>Creación de select</title>
    </head>
    <body>
        <select>
            <?php
                for($i=0;$i<=10;$i++){
                    echo "<option value=".$i.">$i</option>";
                }
            ?>
        </select>
    </body>
</html>