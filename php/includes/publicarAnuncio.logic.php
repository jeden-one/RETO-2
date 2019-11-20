<?php
$dbh = connect();
$categorias = searchCategoriaAll($dbh);
close($dbh);
if ($_GET["action"] == "publicar") {
    include "print/publicarAnuncio.print.php";

 } elseif ($_GET["action"] == "modificar") {
    $anuncioSerializado = $_GET["anuncio"];
    $anuncio=unserialize($anuncioSerializado);
    $subcategorias=searchSubcategoriaByIdCategoria($dbh,$anuncio->categoria);
    include "print/modificarAnuncio.print.php";
}
