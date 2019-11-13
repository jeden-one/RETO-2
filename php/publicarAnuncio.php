<?php
include 'database/mysql.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Publicar Anuncio</title>
    <script src="../../script/librerias/jQuery/jquery-3.4.1.js"></script>
</head>

<body>
<div id="contenedor">
    <header>
        <img src="../img/ajebask.jpeg">
        <p>Mas de "numero" de anuncios publicados en nuestra pagina web</p>
    </header>

    <div id="Datos">
        <h1>Publicar Anuncio</h1>
        <form method="post" action="actions/publicarAnuncio.act.php" enctype="multipart/form-data">
            <label>Titulo: <input type="text" name="titulo"> </label>
            <label>descripcion: <textarea name="descripcion"></textarea> </label>
            <label>Imagen: <input type="file" name="foto"> </label>
            <label for="categoria">Categoria</label>
            <select name="categoria" id="categoria">
                <?php include 'includes/inc_categoriasSolo.php'?>
            </select>
            <label for="subcategoria">Subcategoria</label>
            <select name="subcategoria" id="subcategoria">
            </select>
            <input type="submit" value="Publicar">
        </form>
    </div>

    <?php include("includes/inc_footer.php") ?>
</div>
<script src="../script/publicarAnuncio.js"></script>
</body>

</html>

