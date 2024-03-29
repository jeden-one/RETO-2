<?php
/**
 * pagina de busqueda de anuncios
 */
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Busqueda</title>
    <link href="../css/normalize.css" rel="stylesheet">
    <link href="../css/general.css" rel="stylesheet">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/busqueda.css">
    <script src="../script/librerias/jQuery/jquery-3.4.1.js"></script>
    <script src="../../script/enrutado.js"></script>
</head>

<body>
<div id="contenedor3">
    <header>
        <img src="../img/aje_logo.png" onclick="goIndex()">
    </header>
    <nav>
        <form action="busqueda.php" method="post">
            <input type="text" name="busqueda" value="<?php echo $_COOKIE["busqueda"] ?>" placeholder="Que estás buscando?">
            <input type="submit" name="buscar" value="Buscar" id="buscar">
        </form>
        <div id="botones">
            <input type="button" value="Mis Anuncios" onclick="goMisAnuncios()">
            <input type="button" value="Publicar Anuncio" onclick="goPublicarAnuncio()">
        </div>
        <div id="enlaces">
            <a href="busqueda.php?action=titulo">Titulo</a>
            <a href="busqueda.php?action=usuario">Usuario</a>
        </div>
    </nav>

    <?php
    include "database/mysql.php";
    include "includes/busqueda.logic.php";
    include "includes/print/footer.print.php" ?>
