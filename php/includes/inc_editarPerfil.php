<?php

include "database/mysql.php";
if (isset($_COOKIE["usuario"])) {
    $dbh = connect();

    $resultado = searchUsuarioOneEmail($dbh,$_COOKIE["usuario"]);

    $nombre = $resultado ->nombre;
    $usuario = $resultado ->usuario;
    $password = $resultado->password;
    $descripcion = $resultado->descripcion;

    close($dbh);
} else {
    header("location: login.php?action=editarPerfil");
}

if (isset($_GET["filas"])) {
    echo "  " . $_GET["filas"] . " filas modificadas";
}