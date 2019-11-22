<?php
/**
 * publicar un anuncio nuevo o editar uno tuyo si vienes de mis anuncios
 */
include '../database/mysql.php';
if ($_POST["action"] == "Publicar") {
    if (isset($_POST['titulo']) && isset($_POST['descripcion']) && isset($_POST['subcategoria'])) {
        if ($_POST['titulo'] == '') {
            header("location: ../publicarAnuncio.php?action=publicar&error=1");
        } else {
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $subcategoria = $_POST['subcategoria'];
            if ($_FILES['foto']['name'] == '') {
                $nombreFoto = 'default.jpg';
            } else {
                include '../includes/foto.logic.php';
            }
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
    if (isset($_POST['titulo']) && isset($_POST['descripcion']) && isset($_POST['subcategoria'])) {
        if ($_POST['titulo'] == '') {
            header("location: ../publicarAnuncio.php?action=modificar&error=1");
        } else {
            $titulo = $_POST['titulo'];
            $descripcion = $_POST['descripcion'];
            $subcategoria = $_POST['subcategoria'];
            $id = $_POST["idPasar"];
            if ($_FILES['foto']['name'] == '') {
                $nombreFoto = $_POST['fotoAnuncio'];
            } else {
                include '../includes/foto.logic.php';
            }
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
                if ($_POST['fotoAnuncio'] != 'default.jpg' && $_FILES['foto']['name'] != '') {
                    unlink('../../img' . $_POST['fotoPasar']);
                }
                header("location: ../busqueda.php?action=misAnuncios");
            }
        }
    } else {
        header("location: ../publicarAnuncio.php?action=modificar&error=1");
    }
}
