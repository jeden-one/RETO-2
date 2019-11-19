<?php
if (isset($_GET['action']) && $_GET['action'] == 'misAnuncios') {
    if (!isset($_COOKIE["usuario"])) {
        header('location:login.php?action=misAnuncios');
    } else {
        if (isset($_COOKIE["usuario"])) {
            $dbh = connect();
            $anuncios = searchAnuncioByUsuario($dbh, $_COOKIE["usuario"]);
            include 'misAnuncios.print.php';
        }
    }
} elseif (isset($_GET["anuncios"])) {
    if (isset($_GET['anuncios'])) {
        $anuncios = unserialize($_GET['anuncios']);
        include 'anunciosBusqueda.print.php';
    }
}