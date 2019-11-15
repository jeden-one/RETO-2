<?php
include '../database/mysql.php';
if (isset($_POST['titulo']) && isset($_POST['descripcion']) && isset($_POST['subcategoria'])) {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $subcategoria = $_POST['subcategoria'];

    include '../includes/inc_foto.php';

    $dbh = connect();
    $respuesta = searchUsuarioOneEmail($dbh, $_COOKIE["usuario"]);
    $data = array(
        'titulo' => $titulo,
        'descripcion' => $descripcion,
        'foto' => $nombreFoto,
        'id_subcategoria' => $subcategoria,
        'id_usuario' => $respuesta->id,
    );
    $resultado = insertAnuncio($dbh, $data);
    close($dbh);
    echo $resultado . ' filas afectadas';
}