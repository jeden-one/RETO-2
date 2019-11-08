<!-- // Fichero de pruebas -->
<?php
include "mysql.php";
$dbh = connect();
$categorias = searchCategoriaAll($dbh);

foreach ($categorias as $categoria) {
    echo $categoria->id;
}