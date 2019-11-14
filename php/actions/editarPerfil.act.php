<?php
include "../database/mysql.php";
$dbh = connect();

if (isset($_POST["nombre"]) && isset($_POST["email"])  && isset($_GET["usuario"])) {
    $nombre = $_POST["nombre"];
    $password = $_POST["password"];
    $repetirPassword = $_POST["repetirPassword"];
    $usuario = $_POST["email"];
    $descripcion = $_POST["descripcion"];
    $nombreBuscar = $_GET["usuario"];

    if (empty($password) && empty($repetirPassword)) {
        $resultado = searchUsuarioOneEmail($dbh,$nombreBuscar);

        $id = $resultado->id;

        $filasModificadas = updateUsuarioSinPass($dbh,$nombre,$usuario,$descripcion,$id);

        close($dbh);

        header("location: ../editarPerfil.php?usuario=" . $_GET["usuario"]. "&filas=" . $filasModificadas);
    } else {
        if ($password == $repetirPassword) {
            $hash = password_hash($password,PASSWORD_DEFAULT);

            $resultado = searchUsuarioOneEmail($dbh,$nombreBuscar);

            $id = $resultado->id;

            $filasModificadas = updateUsuarioOne($dbh,$nombre,$hash,$usuario,$descripcion,$id);
            close($dbh);

            header("location: ../editarPerfil.php?usuario=" . $_GET["usuario"]. "&filas=" . $filasModificadas);
        } else {
            echo "Las contraseñas introducidas no coinciden";
        }
    }


} else {
    echo "Campos sin introducir";
}
?>