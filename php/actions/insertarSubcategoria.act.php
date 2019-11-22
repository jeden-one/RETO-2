<?php
include '../database/mysql.php';
if (isset($_POST['subcategoria']) && isset($_POST['categoriaSelect'])) {
    if ($_POST['subcategoria'] != '') {
        $data = array(
            'categoria' => $_POST['categoriaSelect'],
            'nombre' => $_POST['subcategoria'],
        );
        $dbh = connect();
        $resultado = insertSubcategoria($dbh, $data);
        close($dbh);
        if ($resultado = 1) {
            header('../admin/index.php?mensaje=5');
        } else {
            header('../admin/index.php?mensaje=6');
        }
    } else {
        header('../admin/index.php?error=1');
    }
}
