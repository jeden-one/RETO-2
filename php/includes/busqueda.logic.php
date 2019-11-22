<?php
/**
 * al buscar en la barra del buscador
 */
include "../database/mysql.php";
$dbh = connect();

/**
 * si se pulsan los botones titulo o usuario en busqueda y serializar los anuncios para mandarlos por la url como un get
 */
if (isset($_GET["action"]) && isset($_COOKIE["busqueda"])) {

    if ($_GET["action"] == "titulo") {
        $anuncios = searchAnuncioByTitulo($dbh, $_COOKIE["busqueda"]);
        /*$anunciosSerializado = serialize($anuncios);
        header("location: ../busqueda.php?anuncios=" . $anunciosSerializado);*/

    } else {
        $anuncios = searchAnuncioByNombreUsuario($dbh, $_COOKIE["busqueda"]);
        /*$anunciosSerializado = serialize($anuncios);
        header("location: ../busqueda.php?anuncios=" . $anunciosSerializado);*/
    }
}

/**
 * busqueda por titulo y usuario y serializar los anuncios para mandarlos por la url como un get
 */

if (isset($_POST["busqueda"])) {
    $busqueda = $_POST["busqueda"];

    $anuncios = searchAnuncioByBusqueda($dbh, $busqueda);
    setcookie("busqueda", $_POST["busqueda"], time() + 60 * 60, '/');
}

/**
 * buscar por subcategoria y serializar los anuncios para mandarlos por la url como un get
 */

if (isset($_GET['subcategoria'])) {
    echo $_GET['subcategoria'];
    $anuncios = searchAnuncioBySubcategoria($dbh, $_GET['subcategoria']);
    /*$anunciosSerializado = serialize($anuncios);
    header("location: ../busqueda.php?anuncios=" . $anunciosSerializado);*/
}
close($dbh);
//--------------------------------------------------------------------------------------------
/**
 * mirar si a busqueda entras por mis anuncios o por la barra de busqueda
 */

/**
 * si vienes de mis anuncios pero no estas logeado te manda a login o sino te busca tus anuncios
 */
if (isset($_GET['action']) && $_GET['action'] == 'misAnuncios') {
    if (!isset($_COOKIE["usuario"])) {
        header('location:login.php?action=misAnuncios');
    } else {
        if (isset($_COOKIE["usuario"])) {
            $dbh = connect();
            $anuncios = searchAnuncioByUsuario($dbh, $_COOKIE["usuario"]);
            close($dbh);
            include 'print/misAnuncios.print.php';
        }
    }
    /**
     * si vienes de la barra de busqueda, desde el action de busqueda se desserializa los anuncios pasados por la url para podes imprimirlos
     */
} else {
    include 'print/anunciosBusqueda.print.php';
}