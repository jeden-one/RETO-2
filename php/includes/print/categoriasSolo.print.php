<?php

$dbh = connect();
$categorias = searchCategoriaAll($dbh);
close($dbh);
include 'categoriaSelect.print.php';
