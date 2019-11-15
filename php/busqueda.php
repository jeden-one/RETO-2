<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../../css/categoria.css">
</head>

<body>
<div id="contenedor3">
    <header>
        <img src="../img/aje_logo.png">
        <p>Mas de "numero" de anuncios publicados en nuestra pagina web</p>
    </header>
    <nav>
        <form action="actions/buscador.act.php" method="post">
            <input type="text" name="busqueda" value="<?php echo $_COOKIE["busqueda"] ?>">
            <input type="submit" name="buscar" value="Buscar" id="buscar">
        </form>
    </nav>

    <div id="botones">
        <div>
            <a href="actions/buscador.act.php?action=titulo">Titulo</a>
            <a href="actions/buscador.act.php?action=usuario">Usuario</a>
        </div>

        <input type="button" value="Mis Anuncios">
        <input type="button" value="Publicar Anuncio">
        <input type="button" value="Ordenar Por">
    </div>

    <?php
    include "database/mysql.php";

    if (isset($_COOKIE["usuario"])) {
        $dbh = connect();
        $anuncios = searchAnuncioByUsuario($dbh,$_COOKIE["usuario"]);
    ?>

    <div id="anuncios">
        <?php foreach ($anuncios as $anuncio) { ?>
        <div class="anuncio">
        <div class="imagenDiv">
            <img src="../../img/<?= $anuncios->foto ?>">
        </div>
        <h2><?= $anuncios->titulo ?></h2>
        <h3><?= $anuncios->usuario ?></h3>
        <p><?= $anuncios->fecha_creacion ?></p>
        </div>
        <?php }  ?>
    </div>
    <?php } else {
        include "includes/inc_anunciosBusqueda.php";
    } ?>

    <?php include "includes/inc_footer.php" ?>
