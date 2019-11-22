<?php
/**
 * todo el php relacionado con el index
 */
include_once "php/database/mysql.php";
/**
 * mostar la cantidad de anuncios publicados en total
 */
function cantidadAnuncios()
{
    $dbh = connect();
    $cont = counterAnuncios($dbh);
    close($dbh);
    echo $cont;
}

/**
 * mostar el estado del usuario en la pagina
 */
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

/**
 * buscar todas las categorias y mostrarlas
 */
function categorias()
{
    $dbh = connect();
    $categorias = searchCategoriaAll($dbh);
    close($dbh);
    include 'print/categorias.print.php';
}
