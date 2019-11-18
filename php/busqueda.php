<?php include "database/mysql.php";?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Busqueda</title>
    <link href="../css/general.css" rel="stylesheet">
    <link href="../css/normalize.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/busqueda.css">
</head>

<body>
<div id="contenedor3">
    <header>
        <img src="../img/aje_logo.png">
        <p><strong><?php $dbh = connect();
                $cont = counterAnuncios($dbh);
                echo $cont; ?></strong> anuncios publicados</p>
    </header>
    <nav>
        <form action="actions/buscador.act.php" method="post">
            <input type="text" name="busqueda" value="<?php echo $_COOKIE["busqueda"] ?>">
            <input type="submit" name="buscar" value="Buscar" id="buscar">
        </form>
        <div id="botones">
            <input type="button" value="Mis Anuncios">
            <input type="button" value="Publicar Anuncio">

            <div id="enlaces">
                <a href="actions/buscador.act.php?action=titulo">Titulo</a>
                <a href="actions/buscador.act.php?action=usuario">Usuario</a>
            </div>
        </div>
    </nav>



    <?php
    include "includes/inc_busqueda.php";
    include "includes/inc_footer.php" ?>
