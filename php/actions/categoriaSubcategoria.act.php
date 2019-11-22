<?php
include '../database/mysql.php';
/**
 * buscar las subcategoriasde una categoria para ajax de publicarAnuncio.js
 */
if (isset($_POST['elegido'])) {
    $dbh = connect();
    $subcategorias = searchSubcategoriaByIdCategoria($dbh, $_POST['elegido']);
    close($dbh);
    include '../includes/print/subcategorias.print.php';
}
