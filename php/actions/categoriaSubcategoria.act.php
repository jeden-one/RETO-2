<?php
include '../database/mysql.php';
if (isset($_POST['elegido'])) {
    $dbh = connect();
    $subcategorias = searchSubcategoriaByIdCategoria($dbh, $_POST['elegido']);
    close($dbh);
    include '../includes/print/subcategorias.print.php';
}
