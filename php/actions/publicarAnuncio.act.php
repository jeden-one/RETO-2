<?php
include '../database/mysql.php';
if ($_GET["action"] == "publicar") {
    if (isset($_POST['titulo']) && isset($_POST['descripcion']) && isset($_POST['subcategoria'])) {
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $subcategoria = $_POST['subcategoria'];

        include '../includes/foto.logic.php';

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
        if($resultado==1){
            header("location: ../busqueda.php?action=misAnuncios");
        }
    }
} elseif ($_GET["action"] == "modificar") {
    if (isset($_POST['titulo']) && isset($_POST['descripcion']) && isset($_POST['subcategoria']) && isset($_FILES["foto"]) && isset($_GET["anuncio"]) && isset($_COOKIE["usuario"]) ) {
        $anuncioSerializado = $_GET["anuncio"];
        $anuncio = unserialize($anuncioSerializado);
        $id = $anuncio->idAnuncio;
        echo $id;
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $subcategoria = $_POST['subcategoria'];
        $nombreFoto = $_FILES["foto"];

        include '../includes/foto.logic.php';

        $dbh = connect();
        $respuesta = searchUsuarioOneEmail($dbh, $_COOKIE["usuario"]);

        $data = array(
            'id' => $id,
            'titulo' => $titulo,
            'descripcion' => $descripcion,
            'foto' => $nombreFoto,
            'id_subcategoria' => $subcategoria,
            'id_usuario' => $respuesta->id,
        );
        $resultado = updateAnuncioOne($dbh, $data);
        close($dbh);
        if($resultado==1){
            header("location: ../busqueda.php?action=misAnuncios");
        } elseif ($resultado == 0) {
            echo "No se ha modificado nada";
        }
    } else {
        echo "Faltan datos por introducir";
    }
}
