<?php
include "../database/mysql.php";
$dbh = connect();

if (isset($_POST["nombre"]) && isset($_POST["password"]) && isset($_POST["email"]) && isset($_POST["descripcion"])) {
    $nombre = $_POST["nombre"];
    $contraseña = $_POST["password"];
    $usuario = $_POST["email"];
    $descripcion = $_POST["descripcion"];
    $id = '';

    $resultado = searchUserIdByNombre($dbh);

    $id = $resultado->id;

    $filasModificadas = updateUsuarioOne($dbh,$nombre,$contraseña,$usuario,$descripcion,$id);
    close($dbh);

    header("location: ../editarPerfil.php?filas=" . $filasModificadas);
}
?>