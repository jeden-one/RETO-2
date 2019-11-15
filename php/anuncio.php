<?php
include_once "database/mysql.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="../css/anuncio.css">
</head>

<body>
<div id="contenedor4">
    <header>
        <img src="../img/aje_logo.png">
        <p>Mas de "numero" de anuncios publicados en nuestra pagina web</p>
    </header>
    <?php include "includes/inc_anuncio.php" ;
    include("includes/inc_anunciosCategoria.php") ;
    include("includes/inc_footer.php") ?>

</body>

</html>
