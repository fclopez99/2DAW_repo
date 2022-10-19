
<?php
$archivo = fopen("visitantes.txt", 'a') or die ("ERROR al abrir el archivo");
if(isset($_POST['enviar'])){
    if(empty($_POST['mensaje'])){
        $_POST['mensaje']="Sin comentario";
    }
    if(
        isset($_POST['mail'])&&
        isset($_POST['nome'])&&
        isset($_POST['mensaje'])){
            $mail = $_POST['mail'];
            $nombre = $_POST['nome'];
        }

}

$message = stripslashes(nl2br(htmlentities($_POST['mensaje'])));
$d = date ( "d/m/Y H:i:s" );
$page = "";
$email ="<a href=\"mailto: $mail\">$mail</a>";
$page = "<b>$nombre</b> (".$email.") <b>Fecha:</b> $d<br> <b>Mensaje: </b>$message -";
fwrite($archivo, "$page", strlen("$page"));
fclose($archivo);
echo "<div align='center'>Gracias por tu mensaje.<br>";
echo "<a href='index.php' title='Volver'>Volver</a></div>";
?>