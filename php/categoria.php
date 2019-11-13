<?php
include_once "../database/mysql.php";
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../../CSS/categoria.css">
    <script src="../script/index.js"></script>
</head>

<body>
<div id="contenedor3">
    <header>
        <img src="../img/aje_logo.png">
        <p>Mas de "numero" de anuncios publicados en nuestra pagina web</p>
    </header>
    <nav>
        <input type="text">
        <input type="button" name="buscar" value="Buscar" id="buscar">

        <div id="botones">
            <input type="button" value="Mis Anuncios">
            <input type="button" value="Publicar Anuncio">
            <input type="button" value="Ordenar Por">
        </div>
    </nav>

    <?php include("includes/inc_categorias.php") ?>
    <?php include("includes/inc_footer.php") ?>

</div>
</body>

</html>
