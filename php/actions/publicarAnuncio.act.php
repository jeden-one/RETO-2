<?php
include '../database/mysql.php';
if (isset($_POST['titulo']) && isset($_POST['descripcion']) && isset($_POST['subcategoria'])) {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $subcategoria = $_POST['subcategoria'];

    $rutaFotoTemporal = $_FILES['foto']["tmp_name"];
    $array = explode('.', $_FILES['foto']["name"]);
    # Capturamos el último elemento del array anterior que vendría a ser la extensión
    $ext = end($array);
    //cambiar el nombre de la foto por si hay coincidencias
    $nombreFoto = md5(basename($_FILES['foto']["name"])) . '.' . $ext;
    $nuevaRuta = "../../img/" . $nombreFoto;
    //Movemos el archivo desde su ubicación temporal hacia la nueva ruta
    move_uploaded_file($rutaFotoTemporal, $nuevaRuta);

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