<?php
include '../database/mysql.php';
session_start();
if (isset($_POST['titulo']) && isset($_POST['descripcion']) && isset($_POST['subcategoria'])) {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $subcategoria = $_POST['subcategoria'];
    $rutaFotoTemporal = $_FILES['foto']["tmp_name"];
    $nombreFoto = basename($_FILES['foto']["name"]);
    $nuevaRuta = "../../img/" . $nombreFoto;
    //Movemos el archivo desde su ubicación temporal hacia la nueva ruta
    /*if (move_uploaded_file($rutaFotoTemporal, $nuevaRuta)) {//no funciona
        echo 'movido';
    } else {
        echo 'no movido';
    }*/

    $dbh = connect();
    $respuesta = searchUsuarioOneEmail($dbh, $_SESSION["usuario"]);
    $data = array(
        'titulo' => $titulo,
        'descripcion' => $descripcion,
        'foto' => $nombreFoto,
        'id_subcategoria' => $subcategoria,
        'id_usuario' => $respuesta->id,
    );
    $resultado=insertAnuncio($dbh,$data);
    close($dbh);
    echo $resultado.' filas afectadas';
}