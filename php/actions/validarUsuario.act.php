<?php
/**
 * validar si el usuario existe para habilitar el campo contraseña en login
 */
include '../database/mysql.php';
if (isset($_POST['usuario'])) {
    $dbh = connect();
    $usuario = searchUsuarioOneEmail($dbh, $_POST['usuario']);
    if ($usuario) {
        die('true');
    } else {
        die('false');
    }
}