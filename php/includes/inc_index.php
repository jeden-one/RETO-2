<?php
include_once "php/database/mysql.php";

function cantidadAnuncios()
{
    $dbh = connect();
    $cont = counterAnuncios($dbh);
    close($dbh);
    echo $cont;
}

function sesion()
{
    if (isset($_GET['accion'])) {
        if ($_GET['accion'] === "cerrarSesion") {
            setcookie("busqueda", "", -1);
            setcookie("usuario", "", -1);
            header("Location:index.php");
        }
    }

    if (!isset($_COOKIE["usuario"])) {
        echo '<input type="button" value="Iniciar sesión" onclick="goLogin()">';
    } else {
        echo "<p id='usLog'>Bienvenido, " . $_COOKIE["usuario"] . "<br><a href='index.php?accion=cerrarSesion'>Cerrar sesión</a></p>";
    }
}

function categorias()
{
    $dbh = connect();
    $resultado = searchCategoriaAll($dbh);
    close($dbh);
    foreach ($resultado as $value) {
        $subcategorias = searchSubcategoriaByIdCategoria($dbh, $value->id);
        $subcategoriasIl = '';
        foreach ($subcategorias as $valor) {
            $subcategoriasIl = $subcategoriasIl . '<li class="elementosSubcategorias">' . '<a href="" class="enlaceSubcategoria">' . $valor->subcategoria . '</a>' . '</li>';
        }
        $subcategoriasUl = '<ul class="listaSubcategorias" >' . $subcategoriasIl . '</ul>';
        echo '<li class="elementosCategorias" onclick="mostrarSubcategorias(' . $value->id . ')"> <div class="divCatImagen"><p id="text">' . $value->nombre . '</p>
                    <img src="img/flechaAbajo.svg" class="flechaAbajo">' . $subcategoriasUl . '</div></li>';
    }
}