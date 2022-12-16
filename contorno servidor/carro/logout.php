<?php
    session_name('COMPRA');
    session_start();
    session_destroy();
    header('Location:index.php');
?>