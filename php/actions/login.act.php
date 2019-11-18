<?php
include "../database/mysql.php";
$dbh = connect();

if (isset($_POST["usuario"]) && isset($_POST["pass"])&&$_POST['pass']!='') {
    $pass = $_POST["pass"];
    $usuario = $_POST["usuario"];
    $resultado = searchUsuarioOneEmail($dbh, $usuario);
    close($dbh);
    if ($resultado == true) {
        if (password_verify($pass, $resultado->password)) {
            setcookie("usuario", $_POST["usuario"], time() + (60 * 60 * 24 * 7), "/");
            switch ($_POST['action']) {
                case 'publicarAnuncio':
                    header("location: ../publicarAnuncio.php");
                    break;
                case 'editarPerfil':
                    header("location: ../editarPerfil.php");
                    break;
                case 'misAnuncios':
                    header("location: ../busqueda.php?action=misAnuncios");
                    break;
                case 'login':
                    header("location: ../../index.php");
                    break;
            }
        } else {
            header("location: ../login.php?error=1");
        }
    }
} else {
    header("location: ../login.php?error=2");
}