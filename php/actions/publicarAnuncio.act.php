<?php
include '../database/mysql.php';
if (isset($_POST['titulo']) && isset($_POST['descripcion'])) {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $rutaFotoTemporal = $_FILES['foto']["tmp_name"];
    $nombreFoto = $_FILES['foto']["name"];
    $nuevaRuta = "../../imag/" . $nombreFoto;
    //Movemos el archivo desde su ubicación temporal hacia la nueva ruta
    move_uploaded_file($rutaFotoTemporal, $nuevaRuta);
    $dbh=connect();

    $data=array(
        'titulo'=>$titulo,
        'descripcion'=>$descripcion,
        'foto'=>$nombreFoto,
        'id_subcategoria'=>'',
        'id_usuario'=>'',
    );
    $resultado=insertAnuncio($dbh,$data);
}