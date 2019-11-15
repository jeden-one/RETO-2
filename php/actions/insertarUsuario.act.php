<?php
include '../database/mysql.php';
if (isset($_POST['usuario']) && isset($_POST['pass']) && isset($_POST['nombre'])) {
    $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
    $data = array(
        'usuario' => $_POST['usuario'],
        'nombre' => $_POST['nombre'],
        'password' => $password,
    );
    $dbh = connect();
    $resultado = insertUsuario($dbh, $data);
    close($dbh);
    echo $resultado . 'usuario insertado con exito';
}
