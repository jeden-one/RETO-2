<?php
/**
 * para que el administrador inserte un usuario
 */
include '../database/mysql.php';
if (isset($_POST['usuario']) && isset($_POST['pass']) && isset($_POST['nombre'])) {
    if ($_POST['usuario'] != '' || $_POST['pass'] != '' || $_POST['nombre'] != '') {
        $password = password_hash($_POST['pass'], PASSWORD_DEFAULT);
        $data = array(
            'usuario' => $_POST['usuario'],
            'nombre' => $_POST['nombre'],
            'password' => $password,
            'foto' => "logodefecto.png"
        );
        $dbh = connect();
        $resultado = insertUsuario($dbh, $data);
        close($dbh);
        if ($resultado) {
            header('../admin/index.php?mensaje=1');
        } else {
            header('../admin/index.php?mensaje=2');
        }
    } else {
        header('../admin/index.php?error=1');
    }
}

