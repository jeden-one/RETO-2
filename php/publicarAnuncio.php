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
    <link rel="stylesheet" href="../css/publicarAnuncio.css">
    <script src="../../script/librerias/jQuery/jquery-3.4.1.js"></script>
</head>

<body>
<div id="contenedor6">
    <header>
        <img src="../../img/aje_logo.png">
        <p>Mas de "numero" de anuncios publicados en nuestra pagina web</p>
    </header>

<?php
if ($_GET["action"] == "publicar") { ?>
    <form id="datos" method="post" action="actions/publicarAnuncio.act.php?action=publicar" enctype="multipart/form-data">
        <h1>Publicar Anuncio</h1>
        <label>Titulo: <input type="text" name="titulo"> </label>
        <label>descripcion: <textarea name="descripcion"></textarea> </label>
        <label>Imagen: <input type="file" name="foto" accept="image/x-png,image/gif,image/jpeg"> </label>
        <div class="selector">
            <label for="categoria">Categoria:</label>
            <select id="categoria">
                <?php include 'includes/inc_categoriasSolo.php' ?>
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

    <form id="datos" method="post" action="actions/publicarAnuncio.act.php?action=modificar&anuncio=<?=$anuncio?>" enctype="multipart/form-data">
        <h1>Modificar Anuncio</h1>
        <label>Titulo: <input type="text" name="titulo" value="<?= $anuncio->titulo?>"> </label>
        <label>descripcion: <textarea name="descripcion" ><?= $anuncio->descripcion ?></textarea> </label>
        <label>Imagen: <input type="file" name="foto" accept="image/x-png,image/gif,image/jpeg" value="<?= $anuncio->foto?>"> </label>
        <div class="selector">
            <label for="categoria">Categoria:</label>
            <select id="categoria">
                <?php include 'includes/inc_categoriasSolo.php' ?>
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

    <?php include("includes/inc_footer.php") ?>
</div>
<script src="../script/publicarAnuncio.js"></script>
</body>

</html>
