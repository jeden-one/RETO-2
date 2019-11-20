<?php
$dbh = connect();

if (isset($_GET['anuncio'])) {
    $anuncioElegido = unserialize($_GET['anuncio']);
    $anuncios = searchAnuncioBySubcategoriaSinUnAnuncio($dbh, $anuncioElegido->subcategoria, $anuncioElegido->id);
    include 'print/anuncioElegido.print.php';
    include 'print/anunciosSubcategoria.print.php';
}

