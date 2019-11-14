<?php
include '../database/mysql.php';
if (isset($_POST['titulo']) && isset($_POST['descripcion'])&& isset($_POST['subcategoria'])) {
    $titulo = $_POST['titulo'];
    $descripcion = $_POST['descripcion'];
    $subcategoria=$_POST['subcategoria'];
    //$usuario=id del usuario de la sesion;
    $rutaFotoTemporal = $_FILES['foto']["tmp_name"];
    echo $rutaFotoTemporal.'<br>';
    $nombreFoto = basename($_FILES['foto']["name"]);
    $nuevaRuta = "../../img/" . $nombreFoto;
    //Movemos el archivo desde su ubicación temporal hacia la nueva ruta
    if(move_uploaded_file($rutaFotoTemporal, $nuevaRuta)){//no funciona
        echo 'movido';
    }
    else{
        echo 'no movido';
    }

    /*$dbh=connect();

    $data=array(
        'titulo'=>$titulo,
        'descripcion'=>$descripcion,
        'foto'=>$nombreFoto,
        'id_subcategoria'=>$subcategoria,
        'id_usuario'=>2,//temporal
    );
    $resultado=insertAnuncio($dbh,$data);
    echo $resultado.' filas afectadas';*/
}