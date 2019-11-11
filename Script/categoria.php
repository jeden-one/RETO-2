<?php
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../CSS/categoria.css">
</head>

<body>
<div id="contenedor3">
    <header>
        <img src="../img/ajebask.jpeg">
        <p>Mas de "numero" de anuncios publicados en nuestra pagina web</p>
    </header>
    <nav>
        <input type="text">
        <input type="button" name="buscar" value="Buscar">

        <div id="botones">
            <input type="button" value="Mis Anuncios">
            <input type="button" value="Publicar Anuncio">
            <input type="button" value="Ordenar Por">
        </div>
    </nav>

    <?php include("Includes/inc_anunciosCategoria.php") ?>
    <?php include("Includes/inc_footer.php") ?>


</body>
</html>
</div>
</body>

</html>
