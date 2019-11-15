<?php
session_start();
include "../database/mysql.php";
$dbh = connect();

if (isset($_GET["action"]) && isset($_COOKIE["busqueda"])) {

    if ($_GET["action"] == "titulo") {
        $anuncios = searchAnuncioByTitulo($dbh, $_COOKIE["busqueda"]);
        $anunciosSerializado=serialize($anuncios);
        header("location: ../busqueda.php?anuncios=".$anunciosSerializado);

    } else {
        $anuncios = searchAnuncioByNombreUsuario($dbh, $_COOKIE["busqueda"]);
        $anunciosSerializado = serialize($anuncios);
        header("location: ../busqueda.php?anuncios=" . $anunciosSerializado);
    }
}

    if (isset($_POST["busqueda"])) {
        $busqueda = $_POST["busqueda"];

        $anuncios = searchAnuncioByBusqueda($dbh, $busqueda);
        $anunciosSerializado=serialize($anuncios);
        header("location: ../busqueda.php?anuncios=".$anunciosSerializado);
        setcookie("busqueda",$_POST["busqueda"],time()+60*60,'/');
}

