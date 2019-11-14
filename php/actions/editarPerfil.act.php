<?php
include "../database/mysql.php";
$dbh = connect();

if (isset($_POST["nombre"]) && isset($_POST["email"])  && isset($_COOKIE["usuario"])) {
    $nombre = $_POST["nombre"];
    $password = $_POST["password"];
    $repetirPassword = $_POST["repetirPassword"];
    $usuario = $_POST["email"];
    $descripcion = $_POST["descripcion"];
    $nombreBuscar = $_COOKIE["usuario"];

    if (empty($password) && empty($repetirPassword)) {
        $password = $_POST["passwordPasar"];
        $resultado = searchUsuarioOneEmail($dbh,$nombreBuscar);

        $id = $resultado->id;

        $data = array(
            'id' => $id,
            'nombre' => $nombre,
            'usuario' => $usuario,
            'password' => $password,
            'descripcion' => $descripcion
        );

        $filasModificadas = updateUsuarioOne($dbh,$data);

        close($dbh);
        setcookie("usuario", $usuario);
        header("location: ../editarPerfil.php? filas=" . $filasModificadas);

    } else {
        if ($password == $repetirPassword) {
            $hash = password_hash($password,PASSWORD_DEFAULT);

            $resultado = searchUsuarioOneEmail($dbh,$nombreBuscar);

            $id = $resultado->id;

            $data = array(
                'id' => $id,
                'nombre' => $nombre,
                'usuario' => $usuario,
                'password' => $hash,
                'descripcion' => $descripcion
            );



            $filasModificadas = updateUsuarioOne($dbh,$data);

            close($dbh);
            setcookie("usuario", $usuario);

            header("location: ../editarPerfil.php?filas=" . $filasModificadas);

        } else {
            echo "Las contraseñas introducidas no coinciden";
        }
    }


} else {
    echo "Campos sin introducir";
}
?>