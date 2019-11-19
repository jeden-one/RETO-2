<?php
include_once "php/database/mysql.php";

function cantidadAnuncios()
{
    $dbh = connect();
    $cont = counterAnuncios($dbh);
    close($dbh);
    echo $cont;
}

function sesion()
{
    if (isset($_GET['accion'])) {
        if ($_GET['accion'] === "cerrarSesion") {
            setcookie("busqueda", "", -1);
            setcookie("usuario", "", -1);
            header("Location:index.php");
        }
    }

    if (!isset($_COOKIE["usuario"])) {
        echo '<input type="button" value="Iniciar sesión" onclick="goLogin()">';
    } else {
        $dbh = connect();
        $usuario = searchUsuarioOneEmail($dbh, $_COOKIE["usuario"]);
        close($dbh);
        echo "<p id='usLog'>Bienvenido, " . $usuario->nombre . "<br><a href='index.php?accion=cerrarSesion'>Cerrar sesión</a></p>";
    }
}

function categorias()
{
    $dbh = connect();
    $categorias = searchCategoriaAll($dbh);
    close($dbh);
    include 'categorias.print.php';
}
