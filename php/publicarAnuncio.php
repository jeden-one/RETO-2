<?php
include 'database/mysql.php';
if (!isset($_COOKIE["usuario"])) {
    header("location: login.php?action=publicarAnuncio");
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Publicar Anuncio</title>
    <link href="../css/general.css" rel="stylesheet">
    <link href="../css/normalize.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/publicarAnuncio.css">
    <script src="../../script/librerias/jQuery/jquery-3.4.1.js"></script>
    <script src="../script/goIndex.js"></script>
</head>

<body>
<div id="contenedor6">
    <header>
        <img src="../../img/aje_logo.png" onclick="goIndex()">
    </header>

    <?php
    if ($_GET["action"] == "publicar") { ?>
        <h1>Publicar Anuncio</h1>
        <form id="datos" method="post" action="actions/publicarAnuncio.act.php?action=publicar"
              enctype="multipart/form-data">
            <label for="titulo">Titulo: </label><input type="text" name="titulo" id="titulo">
            <label for="descripcion">Descripcion: </label><textarea name="descripcion" id="descripcion"></textarea>
            <label>Imagen: </label><input type="file" name="foto" accept="image/x-png,image/gif,image/jpeg">
            <div class="selector">
                <label for="categoria">Categoria:</label>
                <select id="categoria">
                    <?php include 'includes/print/categoriasSolo.print.php' ?>
                </select>
            </div>
            <div class="selector">
                <label for="subcategoria">Subcategoria:</label>
                <select name="subcategoria" id="subcategoria">
                </select>
            </div>
            <input type="submit" value="Publicar">
        </form>

    <?php } elseif ($_GET["action"] == "modificar") {
        $anuncio = $_GET["anuncio"]; ?>

        <form id="datos" method="post" action="actions/publicarAnuncio.act.php?action=modificar&anuncio=<?= $anuncio ?>"
              enctype="multipart/form-data">
            <h1>Modificar Anuncio</h1>
            <label for="titulo">Titulo: </label><input id="titulo" type="text" name="titulo"
                                                       value="<?= $anuncio->titulo ?>">
            <label for="desc">descripcion: </label><textarea id="desc"
                                                             name="descripcion"><?= $anuncio->descripcion ?></textarea>
            <label for="imagen">Imagen: </label>
            <input id="imagen" type="file" name="foto" accept="image/x-png,image/gif,image/jpeg"
                   value="<?= $anuncio->foto ?>"/>
            <div class="selector">
                <label for="categoria">Categoria:</label>
                <select id="categoria">
                    <?php include 'includes/print/categoriasSolo.print.php' ?>
                </select>
            </div>
            <div class="selector">
                <label for="subcategoria">Subcategoria:</label>
                <select name="subcategoria" id="subcategoria">
                </select>
            </div>
            <input type="submit" value="Actualizar Anuncio">
        </form>
    <?php } ?>

    <?php include("includes/print/footer.print.php") ?>
</div>
<script src="../script/publicarAnuncio.js"></script>
</body>

</html>
