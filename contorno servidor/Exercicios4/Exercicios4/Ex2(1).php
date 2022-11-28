<html>
    <head>
        <title>Exercicio 2</title>
        <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
    <?php    
        if(!isset($_REQUEST["aleatorio"]) && !isset($_REQUEST["intentos"])){
            $aleatorio=mt_rand(1,100);
            $intentos=0;
        }else{
            $aleatorio=$_REQUEST["aleatorio"];
            $intentos=$_REQUEST["intentos"];
        }
        echo "<form action='Ex2(2).php' method='post' class='form-inline'>
        <label for='numero'>Adivina o numero:</label>
        <input type='hidden' name='aleatorio' value='$aleatorio'>
        <input type='hidden' name='intentos' value='$intentos'>
        <input type='text' name='numero' id='numero' class='form-control'>
        <input type='submit' value='Enviar' class='btn btn-default'>
        </form>";
        ?>
    </body>
</html>