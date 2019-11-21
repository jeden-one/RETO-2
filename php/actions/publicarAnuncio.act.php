<?php
/**
 * publicar un annuncio o editar uno tuyo si vienes de mis anuncios
 */
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
    if (isset($_POST['titulo']) && isset($_POST['descripcion']) && isset($_POST['subcategoria']) && isset($_GET["anuncio"])) {
        $anuncio = $_GET["anuncio"];
        $id = $anuncio->idAnuncio;
        $titulo = $_POST['titulo'];
        $descripcion = $_POST['descripcion'];
        $subcategoria = $_POST['subcategoria'];

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
        }
    }
}
