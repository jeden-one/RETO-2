<?php
include "../database/mysql.php";
$dbh = connect();

if (isset($_POST["usuario"]) && isset($_POST["pass"])) {
    $pass = $_POST["pass"];
    $usuario = $_POST["usuario"];

    $resultado = searchUsuarioOneEmail($dbh, $usuario);
    close($dbh);
    if ($resultado == false) {
        header("location: ../login.php?error=2");
    } else {
        if (password_verify($pass, $resultado->password)) {
            header("location: ../../index.php?usuario=".$usuario);
        } else {
            header("location: ../login.php?error=1");
        }

    }

} else {
    echo 'no datos';
}