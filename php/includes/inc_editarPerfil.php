<?php
include "database/mysql.php";
if (isset($_COOKIE["usuario"])) {
    $dbh = connect();

    $resultado = searchUsuarioOneEmail($dbh, $_COOKIE["usuario"]);

    $nombre = $resultado->nombre;
    $usuario = $resultado->usuario;
    $password = $resultado->password;
    $descripcion = $resultado->descripcion;
    $nombreFoto = $resultado->foto;

    close($dbh);
} else {
    header("location: login.php?action=editarPerfil");
}
function mensajeRespuesta()
{
    if (isset($_GET["filas"])) {
        if ($_GET["filas"] == 1) {
            echo "<span>Modificado exitosamente</span>";
        }
        if ($_GET["filas"] == 0) {
            echo "<span>Usuario no modificado</span>";
        }
    }
}