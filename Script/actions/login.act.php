<?php
include "../../database/mysql.php";
if (isset($_POST["usuario"]) && isset($_POST["pass"])) {
    $pass = $_POST["pass"];
    $usuario = $_POST["usuario"];
    $dbh = connect();
    $resultado = searchUsuarioAndPassword($dbh, $usuario, $pass);
    if ($resultado == false) {
        echo 'datos erroneos';
        header("location: ../login.php?error=1");
    }
    else{
        header("location: ../index.php");
    }
} else {
    echo 'no datos';
}
?>
