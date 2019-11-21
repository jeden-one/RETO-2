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
        $anunciosSerializado = serialize($anuncios);
        header("location: ../busqueda.php?anuncios=" . $anunciosSerializado);

    } else {
        $anuncios = searchAnuncioByNombreUsuario($dbh, $_COOKIE["busqueda"]);
        $anunciosSerializado = serialize($anuncios);
        header("location: ../busqueda.php?anuncios=" . $anunciosSerializado);
    }
}

/**
 * busqueda por titulo y usuario y serializar los anuncios para mandarlos por la url como un get
 */

if (isset($_POST["busqueda"])) {
    $busqueda = $_POST["busqueda"];

    $anuncios = searchAnuncioByBusqueda($dbh, $busqueda);
    $anunciosSerializado = serialize($anuncios);
    header("location: ../busqueda.php?anuncios=" . $anunciosSerializado);
    setcookie("busqueda", $_POST["busqueda"], time() + 60 * 60, '/');
}

/**
 * buscar por subcategoria y serializar los anuncios para mandarlos por la url como un get
 */

if (isset($_GET['subcategoria'])) {
    echo $_GET['subcategoria'];
    $anuncios = searchAnuncioBySubcategoria($dbh, $_GET['subcategoria']);
    print_r($anuncios);
    $anunciosSerializado = serialize($anuncios);
    header("location: ../busqueda.php?anuncios=" . $anunciosSerializado);
}
close($dbh);

