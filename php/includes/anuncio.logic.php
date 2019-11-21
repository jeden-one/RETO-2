<?php
/**
 * busqueda en la base de datos para recibir el anuncio elegido y sacar los anuncios de la misma subcategoria sin el anuncio elegido
 */
$dbh = connect();

if (isset($_GET['anuncio'])) {
    $anuncioElegido = unserialize($_GET['anuncio']);
    $anuncios = searchAnuncioBySubcategoriaSinUnAnuncio($dbh, $anuncioElegido->subcategoria, $anuncioElegido->id);
    close($dbh);
    include 'print/anuncioElegido.print.php';
    include 'print/anunciosSubcategoria.print.php';
}

