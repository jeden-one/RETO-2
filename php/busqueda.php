<?php
?>
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
    if (isset($_GET['action'])&&$_GET['action']=='misAnuncios'){
        if (!isset($_COOKIE["usuario"])){
            header('location:login.php?action=misAnuncios');
        }
        else{
            include 'includes/inc_misAnuncios.php';
        }
    }
    elseif(isset($_GET["anuncios"])) {
        include "includes/inc_anunciosBusqueda.php";
    }

    include "includes/inc_footer.php" ?>
