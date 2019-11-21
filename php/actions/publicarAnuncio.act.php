<?php
/**
 * publicar un annuncio o editar uno tuyo si vienes de mis anuncios
 */
include '../database/mysql.php';
if ($_POST["action"] == "Publicar") {
    if (isset($_POST['titulo']) && isset($_POST['descripcion']) && isset($_POST['subcategoria']) && $_FILES['foto']['name'] != "") {
        if ($_POST['titulo'] == '') {
            header("location: ../publicarAnuncio.php?action=publicar&error=1");
        } else {

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
            if ($resultado == 1) {
                header("location: ../busqueda.php?action=misAnuncios");
            }
        }

    } elseif ($_FILES['foto']['size'] == 0 && isset($_POST['titulo']) && isset($_POST['descripcion']) && isset($_POST['subcategoria'])) {
        if ($_POST['titulo'] == '') {
            header("location: ../publicarAnuncio.php?action=publicar&error=1");
        } else {
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $subcategoria = $_POST['subcategoria'];
            $nombreFoto = "default.jpg";

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

            if ($resultado == 1) {
                header("location: ../busqueda.php?action=misAnuncios");
            }
        }
    } else {
        header("location: ../publicarAnuncio.php?action=publicar&error=1");
    }

} elseif ($_POST["action"] == "Modificar") {
    if (isset($_POST['titulo']) && isset($_POST['descripcion']) && isset($_POST['subcategoria']) && $_FILES['foto']['name'] != "") {
        if ($_POST['titulo'] == '') {
            header("location: ../publicarAnuncio.php?action=modificar&error=1");
        } else {
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $subcategoria = $_POST['subcategoria'];
            $id = $_POST["idPasar"];

            include '../includes/foto.logic.php';

            $dbh = connect();
            $respuesta = searchUsuarioOneEmail($dbh, $_COOKIE["usuario"]);

            $data = array(
                'id' => $id,
                'titulo' => $titulo,
                'descripcion' => $descripcion,
                'foto' => $nombreFoto,
                'id_subcategoria' => $subcategoria,
                'id_usuario' => $respuesta->id
            );

            $resultado = updateAnuncioOne($dbh, $data);
            close($dbh);

            if ($resultado == 1) {
                header("location: ../busqueda.php?action=misAnuncios");
            }
        }

    } elseif ($_FILES['foto']['size'] == 0 && isset($_POST['titulo']) && isset($_POST['descripcion']) && isset($_POST['subcategoria'])) {
        if ($_POST['titulo'] == '') {
            header("location: ../publicarAnuncio.php?action=modificar&error=1");
        } else {
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $subcategoria = $_POST['subcategoria'];
            $id = $_POST["idPasar"];
            $nombreFoto = "default.jpg";

            $dbh = connect();
            $respuesta = searchUsuarioOneEmail($dbh, $_COOKIE["usuario"]);

            $data = array(
                'id' => $id,
                'titulo' => $titulo,
                'descripcion' => $descripcion,
                'foto' => $nombreFoto,
                'id_subcategoria' => $subcategoria,
                'id_usuario' => $respuesta->id
            );

            $resultado = updateAnuncioOne($dbh, $data);
            close($dbh);

            if ($resultado == 1) {
                header("location: ../busqueda.php?action=misAnuncios");
            }
        }

    } else {
        header("location: ../publicarAnuncio.php?action=modificar&error=1");
    }
}
