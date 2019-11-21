<?php
/**
 * cuando editas el perfil
 */
include "../database/mysql.php";
$dbh = connect();
/**
 * si recibe el nombre, email y esta registrado mirando la cookie
 */
if (isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_COOKIE["usuario"])) {
    $nombre = $_POST["nombre"];
    $password = $_POST["password"];
    $repetirPassword = $_POST["repetirPassword"];
    $usuario = $_POST["email"];
    $descripcion = $_POST["descripcion"];
    $nombreBuscar = $_COOKIE["usuario"];
    $nombreFoto = $_POST["foto"];
    $resultado = searchUsuarioOneEmail($dbh, $nombreBuscar);
    $id = $resultado->id;

    if (isset($_FILES['foto'])) {
        include '../includes/foto.logic.php';
    }
    else{
        $nombreFoto = $_POST["fotoPasar"];
    }
    if (empty($password) && empty($repetirPassword)) {
        $pass = $_POST["passwordPasar"];
    }
     else {
        if ($password == $repetirPassword) {
            $pass = password_hash($password, PASSWORD_DEFAULT);
        } else {
            header("location: ../editarPerfil.php?error=1");
        }
    }
    $data = array(
        'id' => $id,
        'nombre' => $nombre,
        'usuario' => $usuario,
        'password' => $pass,
        'foto' => $nombreFoto,
        'descripcion' => $descripcion
    );

    $filasModificadas = updateUsuarioOne($dbh, $data);
    if($_POST['fotoPasar']!='logodefecto.png'){
        unlink('../../img'.$_POST['fotoPasar']);
    }
    close($dbh);
    setcookie("usuario", $usuario, time() + (60 * 60 * 24 * 7), "/");

    header("location: ../editarPerfil.php?filas=" . $filasModificadas);

} else {
    header("location: ../editarPerfil.php?error=2");
}