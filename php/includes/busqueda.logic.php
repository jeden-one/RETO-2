<?php
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
} elseif (isset($_GET["anuncios"])) {
    if (isset($_GET['anuncios'])) {
        $anuncios = unserialize($_GET['anuncios']);
        include 'print/anunciosBusqueda.print.php';
    }
}