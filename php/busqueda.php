<?php
?>
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
            <input type="text" name="busqueda" value="<?php echo $_POST["busqueda"] ?>">
            <input type="submit" name="buscar" value="Buscar" id="buscar">
        </form>
    </nav>

    <div id="botones">
        <input type="button" value="Mis Anuncios">
        <input type="button" value="Publicar Anuncio">
        <input type="button" value="Ordenar Por">
    </div>


    <?php include "includes/inc_footer.php" ?>
</div>