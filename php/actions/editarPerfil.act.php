<?php
/**
 * cuando editas el perfil
 */
include "../database/mysql.php";
$dbh = connect();
/**
 * si recibe el nombre email y esta registrado mirando la cookie
 */
if (isset($_POST["nombre"]) && isset($_POST["email"]) && isset($_COOKIE["usuario"])) {
    $nombre = $_POST["nombre"];
    $password = $_POST["password"];
    $repetirPassword = $_POST["repetirPassword"];
    $usuario = $_POST["email"];
    $descripcion = $_POST["descripcion"];
    $nombreBuscar = $_COOKIE["usuario"];
    $nombreFoto = $_POST["foto"];

    if (isset($_FILES['foto'])) {
        include '../includes/foto.logic.php';
    }

    /**
     * mirar si los campos de las contraseñas y las fotos estan vacios para insertar los anteriores
     */
    if (empty($password) && empty($repetirPassword) && empty($nombreFoto)) {
        $password = $_POST["passwordPasar"];
        $nombreFoto = $_POST["fotoPasar"];
        $resultado = searchUsuarioOneEmail($dbh, $nombreBuscar);

        $id = $resultado->id;

        $data = array(
            'id' => $id,
            'nombre' => $nombre,
            'usuario' => $usuario,
            'password' => $password,
            'foto' => $nombreFoto,
            'descripcion' => $descripcion
        );

        $filasModificadas = updateUsuarioOne($dbh, $data);

        close($dbh);
        setcookie("usuario", $usuario, time() + (60 * 60 * 24 * 7), "/");
        header("location: ../editarPerfil.php? filas=" . $filasModificadas);

    /**
     * mirar si los campos de las contraseñas estan vacios para insertar los anteriores
     */
    } elseif (empty($password) && empty($repetirPassword)) {
        $password = $_POST["passwordPasar"];
        $resultado = searchUsuarioOneEmail($dbh, $nombreBuscar);

        $id = $resultado->id;

        $data = array(
            'id' => $id,
            'nombre' => $nombre,
            'usuario' => $usuario,
            'password' => $password,
            'foto' => $nombreFoto,
            'descripcion' => $descripcion
        );

        $filasModificadas = updateUsuarioOne($dbh, $data);
        if($_POST['fotoPasar']!='logodefecto.png'){
            unlink('../../img'.$_POST['fotoPasar']);
        }
        close($dbh);
        setcookie("usuario", $usuario, time() + (60 * 60 * 24 * 7), "/");
        header("location: ../editarPerfil.php? filas=" . $filasModificadas);

    /**
     * mirar si los campos de las contraseñas y la foto esta vacia para insertar la anterior
     */
    } elseif (empty($nombreFoto)) {
        if ($password == $repetirPassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $nombreFoto = $_POST["fotoPasar"];
            $resultado = searchUsuarioOneEmail($dbh, $nombreBuscar);

            $id = $resultado->id;

            $data = array(
                'id' => $id,
                'nombre' => $nombre,
                'usuario' => $usuario,
                'password' => $hash,
                'foto' => $nombreFoto,
                'descripcion' => $descripcion
            );

            $filasModificadas = updateUsuarioOne($dbh, $data);

            close($dbh);
            setcookie("usuario", $usuario, time() + (60 * 60 * 24 * 7), "/");
            header("location: ../editarPerfil.php? filas=" . $filasModificadas);
        }

    /**
     * mirar si la contraseña introducida es la misma que la repetida
     */
    } else {
        if ($password == $repetirPassword) {
            $hash = password_hash($password, PASSWORD_DEFAULT);

            $resultado = searchUsuarioOneEmail($dbh, $nombreBuscar);

            $id = $resultado->id;

            $data = array(
                'id' => $id,
                'nombre' => $nombre,
                'usuario' => $usuario,
                'password' => $hash,
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
            echo "Las contraseñas introducidas no coinciden";
        }
    }

} else {
    echo "Campos sin introducir";
}