<?php
include 'php/includes/index.logic.php'; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="css/normalize.css">
    <link rel="stylesheet" href="css/index.css">
    <script src="script/index.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
<div id="contenedor">
    <header id="header">
        <img src="img/aje_logo.png" onclick="goIndex()">
        <div>
            <p><strong>
                    <?php cantidadAnuncios(); ?>
                </strong> anuncios publicados
            </p>
            <?php sesion(); ?>
        </div>
    </header>
    <nav>
        <form action="php/actions/buscador.act.php" method="post">
            <input type="text" name="busqueda" value="<?= $_COOKIE["busqueda"] ?>" placeholder="Que estás buscando?">
            <input type="submit" name="buscar" value="Buscar" id="buscar">
        </form>

        <div id="botones">
            <a href="php/busqueda.php?action=misAnuncios">Mis Anuncios</a>
            <a href="php/publicarAnuncio.php?action=publicar">Publicar Anuncio</a>
            <a href="php/editarPerfil.php">Editar Perfil</a>
        </div>
    </nav>

    <div id="categorias">
        <ul id="listaCategorias">
            <?php categorias(); ?>
        </ul>
        <a href="#header"><img src="img/flecha.svg" id="flechaSubir"></a>
    </div>
    <footer>
        <div id="divIconos">
            <a href="https://es-es.facebook.com/ajebask"><img src="img/facebook.svg"></a>
            <a href="https://twitter.com/AjebaskAlava"><img src="img/twitter.svg"></a>
            <a href="http://ajebaskalava.es/"><img src="img/internet.svg"></a>
        </div>
        <p>Copyright © Todos los Derechos Reservados 2019</p>
        <p>Powered by <a href="https://github.com/Jeden-one" target="_blank">Jeden</a></p>
        <p><a href="php/ayuda.php">¿Necesitas ayuda?</a></p>
    </footer>
</div>
</body>
</html>
