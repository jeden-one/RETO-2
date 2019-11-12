<?php
include "../database/mysql.php";

if (isset($_POST["nombre"]) && isset($_POST["password"]) && isset($_POST["email"]) && isset($_POST["descripcion"]) && isset($_POST["id"])) {
    $nombre = $_POST["nombre"];
    $contraseña = $_POST["password"];
    $usuario = $_POST["email"];
    $descripcion = $_POST["descripcion"];
    $id = $_POST["id"];

    $dbh = connect();
    $filasModificadas = updateUsuarioOne($dbh,$nombre,$contraseña,$usuario,$descripcion);
    close($dbh);
    header("location: ../editarPerfil.php?filas=" . $filasModificadas);
}
?>