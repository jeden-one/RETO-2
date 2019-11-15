
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Busqueda</title>
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
            <input type="text" name="busqueda" value="<?php echo $_POST["busqueda"] ?>">
            <input type="submit" name="buscar" value="Buscar" id="buscar">
        </form>
    </nav>

    <div id="botones">
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
            <img src="../../img/<?= $anuncio->fotoAnuncio ?>">
        </div>
        <h2><?= $anuncios->titulo ?></h2>
        <h3><?= $anuncios->nombreUsuario ?></h3>
        <p><?= $anuncios->fechaCreacion ?></p>
    </div>
    <?php } ?>
</div>";
}
     <?php
    if (empty($_POST["busqueda"])) {
        header("location: ../../index.php");
    }

    if (isset($_POST["busqueda"])) {
    include "../database/mysql.php";
    connect();
    $busqueda = $_POST["busqueda"];
    $dbh = connect();

    $anuncios = searchAnuncioByBusqueda($dbh,$busqueda);

    ?>

    <div id="anuncios">
        <?php foreach ($anuncios as $anuncio) { ?>
    <div class="anuncio">
        <div class="imagenDiv">
            <img src="../../img/<?= $anuncio->fotoAnuncio ?>">
        </div>
        <h2><?= $anuncios->titulo ?></h2>
        <h3><?= $anuncios->nombreUsuario ?></h3>
        <p><?= $anuncios->fechaCreacion ?></p>
        </div>
        <?php } ?>
    </div>";

<?php } }?>

    <?php include "includes/inc_footer.php" ?>
</div>