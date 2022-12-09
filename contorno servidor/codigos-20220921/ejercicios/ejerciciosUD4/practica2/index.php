<?php

include "comprobar.php";
if(haySesion()){
        header("location:saludo.php");
}
?>
<!doctype html>
<html lang="es">
    <head>
        <meta charset="UTF-8">
        <title>Formulario de recollida de preferencias</title>
    </head>
    <body>
        <form action="saludo.php">
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre" id="nombre"/><br/>
            <label for="apellidos">Apellidos</label>
            <input type="text" name="apellidos" id="apellidos"/><br/>
            <label for="color_fondo">Color de fondo</label>
            <input type="color" name="color_fondo" id="color_fondo" value="#FFFFFF"/><br/>
            <label for="color_letra">Color de letra</label>
            <input type="color" name="color_letra" id="color_letra"/><br/>
            <label for="tipo_letra">Tipo de letra</label>
            <select name="tipo_letra" id="tipo_letra">
                <option value="'Shadows Into Light', cursive">
                    Shadows Into Light
                </option>
                <option value="'Slabo 27px', serif">Slabo 27px</option>
                <option value="'Roboto', sans-serif">Roboto</option>
            </select><br/>
            <button>Enviar</button>
        </form>
    </body>
</html>