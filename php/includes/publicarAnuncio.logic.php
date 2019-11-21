<?php
/**
 * mirar si has entrado a publicar anuncio para publicar o modificar
 */

/**
 * mirar si estas logeado o no al publicar un anuncio para mandarte a login
 */
include 'database/mysql.php';
if (!isset($_COOKIE["usuario"])) {
    header("location: login.php?action=publicarAnuncio");
}

$dbh = connect();
$categorias = searchCategoriaAll($dbh);
if ($_GET["action"] == "publicar") {
    include "print/publicarAnuncio.print.php";
    /**
     * si es por modificar mirar las subcategoriasa de ese anuncio para mostralos en el select y rellenar todos los apartados
     */
} elseif ($_GET["action"] == "modificar") {
    $anuncioSerializado = $_GET["anuncio"];
    $anuncio = unserialize($anuncioSerializado);
    $subcategorias = searchSubcategoriaByIdCategoria($dbh, $anuncio->categoria);
    include "print/modificarAnuncio.print.php";
}

close($dbh);