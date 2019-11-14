<?php
include "../database/mysql.php";
$dbh = connect();

if (isset($_POST["nombre"]) && isset($_POST["password"]) && isset($_POST["email"]) && isset($_POST["descripcion"]) && isset($_GET["usuario"])) {
    $nombre = $_POST["nombre"];
    $password = $_POST["password"];
    $usuario = $_POST["email"];
    $descripcion = $_POST["descripcion"];
    $nombreBuscar = $_GET["usuario"];

    $resultado = searchUsuarioOneEmail($dbh,$nombreBuscar);

    $id = $resultado->id;
    echo $id;

    $filasModificadas = updateUsuarioOne($dbh,$nombre,$password,$usuario,$descripcion,$id);
    close($dbh);

    header("location: ../editarPerfil.php?usuario=" . $_GET["usuario"]. "&filas=" . $filasModificadas);
} else {
    echo "Campos sin introducir";
}
?>