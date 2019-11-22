<?php
/**
 * buscar las categorias para insertar subcategorias en el administrador
 */
include '../database/mysql.php';
$dbh = connect();
$categorias = searchCategoriaAll($dbh);
close($dbh);
