
<html>
    <head>
        <title>Buz&oacute;n de mensajes</title>
    </head>
    <body>
        <h1>Conexi&oacute;n con el servicio de mensajer&iacute;a</h1>
        <h3>Lista de mensajes</h3>
        <div id="buzon">
        <?php 
            $mysqli = new mysqli("127.0.0.1","root","","mensajes");
            if($mysqli){
                $res = $mysqli->query("SELECT texto, id_remite FROM mensajes ORDER BY id_mensaje");
                if($res){
                    $fila = $res->fetch_assoc();
                    while($fila){
                        echo "<ul>De: {$fila["id_remite"]}"."<br>{$fila["texto"]}</ul>";
                        $fila = $res->fetch_assoc();
                    }
                }
                else{
                    echo "<p class='error'>No hay mensajes<p>";
                }
            }
        ?>            
        </div>
        <h3>Nuevo mensaje</h3>
        <form id="envio_mensaje" method="post">
            <label for="destinatario">Usuario: </label>
            <input type="text" name="destinatario" id="destinatario">
            <br>
            <label for="mensaje">Contrase&ntilde;a: </label>
            <input type="text" name="mensaje" id="mensaje">
            <br>
            <button>Alta de usuario</button>
        </form>
    </body>
</html>