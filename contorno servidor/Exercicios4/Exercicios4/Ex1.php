<html>
    <head>
        <title>Exercicio 1</title>
        <link rel="stylesheet"
        href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    </head>
    <body>
        <table class='table table-striped table-bordered table-hover'>
        <?php
        if(isset($_REQUEST["numero"])){
        $n=$_REQUEST["numero"];
        echo "<tr><td>numero</td><td></td><td></td><td>resultado</td></tr>";
        for($i=1;$i<=10;$i++){
            $cociente=intval($n*$i);
            echo "<tr><td>$n</td><td>X</td><td>$i</td><td>$cociente</td></tr>";
        }
        }
        ?>
        <a href="Ex1.html">return</a>
        </table>
    </body>
</html>