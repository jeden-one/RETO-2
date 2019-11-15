<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/index.css">
    <script src="script/index.js"></script>
</head>
<body>
<div id="contenedor">
    <header id="header">
        <img src="img/aje_logo.png">
        <p><strong>'Algunos'</strong> anuncios publicados</p>
    </header>
    <nav>
        <form action="php/actions/buscador.act.php" method="post">
            <input type="text" name="busqueda" value="<?php echo $_COOKIE["busqueda"] ?>">
            <input type="submit" name="buscar" value="Buscar" id="buscar">
        </form>

        <div id="botones">
            <a href="php/busqueda.php">Mis Anuncios</a>
            <a href="php/publicarAnuncio.php">Publicar Anuncio</a>
            <a href="php/editarPerfil.php">Editar Perfil</a>
        </div>
    </nav>

    <div id="categorias">
        <ul id="listaCategorias">
            <?php
            include_once "php/database/mysql.php";
            include "php/actions/buscador.act.php";

            $dbh = connect();
            $resultado = searchCategoriaAll($dbh);
            foreach ($resultado as $value) {
                $subcategorias = searchSubcategoriaByIdCategoria($dbh, $value->id);
                $subcategoriasIl = '';
                foreach ($subcategorias as $valor) {
                    $subcategoriasIl = $subcategoriasIl . '<li class="elementosSubcategorias">' . '<a href="" class="enlaceSubcategoria">' . $valor->subcategoria . '</a>' . '</li>';
                }
                $subcategoriasUl = '<ul class="listaSubcategorias" style="display: none">' . $subcategoriasIl . '</ul>';
                echo '<li class="elementosCategorias" onclick="mostrarSubcategorias(' . $value->id . ')">' . $value->nombre . '
                    <img src="img/flechaAbajo.svg" class="flechaAbajo">' . $subcategoriasUl . '</li>';
            }
            ?>
        </ul>
        <a href="#header"><img src="img/flecha.svg" id="flechaSubir"></a>
    </div>
    <footer>
        <p>Siguenos en nuestras redes sociales</p>

        <div id="divIconos">
            <a href=""><img src="../../img/facebook.svg"></a>
            <a href=""><img src="../../img/twitter.svg"></a>
            <a href=""><img src="../../img/instagram.svg"></a>
            <a href="https://github.com/jeden-one/RETO-2"><img src="../../img/github.svg"></a>
        </div>

        <p>Copyright © Todos los Derechos Reservados 2019</p>
    </footer>
</div>
</body>
</html>