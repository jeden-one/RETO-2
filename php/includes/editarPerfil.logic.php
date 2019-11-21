<?php
/**
 * al entrar en editar perfil si esta registrado o no y mostar los datos del usuario en los apartados, si no estas logeado te manda a login
 */
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

/**
 * mandar los mensajes de respuesta dependiendo de los resultados de la edicion
 */
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