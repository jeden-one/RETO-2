<?php
include "../../database/mysql.php";

if (isset($_POST["usuario"]) && isset($_POST["pass"])) {
    $pass = $_POST["pass"];
    $usuario = $_POST["usuario"];
    $dbh = connect();
    $resultado = searchUsuarioOneEmail($dbh, $usuario);
    close($dbh);
    if ($resultado == false) {
        header("location: ../login.php?error=2");
    } else {
        if (password_verify($pass, $resultado->password)) {
            header("location: ../index.php");
        } else {
            header("location: ../login.php?error=1");
        }

    }

} else {
    echo 'no datos';
}
?>
