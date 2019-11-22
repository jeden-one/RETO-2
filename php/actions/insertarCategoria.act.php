<?php
include '../database/mysql.php';
if (isset($_POST['categoria'])) {
    if ($_POST['categoria'] != '') {
        $data = array(
            'nombre' => $_POST['categoria'],
        );
        $dbh = connect();
        $resultado = insertCategoria($dbh, $data);
        close($dbh);
        if ($resultado=1){
            header('../admin/index.php?mensaje=3');
        }
        else{
            header('../admin/index.php?mensaje=4');
        }
    } else {
        header('../admin/index.php?error=1');
    }
}
