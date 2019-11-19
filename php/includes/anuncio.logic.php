<?php
include "../../database/mysql.php";
$dbh = connect();

if (isset($_GET['anuncio'])) {
    $anuncioElegido = unserialize($_GET['anuncio']);
    $anuncios = searchAnuncioBySubcategoria($dbh, $anuncioElegido->subcategoria);
    include 'anuncioElegido.print.php';
    include 'anunciosSubcategoria.print.php';
}

