<?php
include_once "database/mysql.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Anuncio</title>
    <link href="../css/general.css" rel="stylesheet">
    <link href="../css/normalize.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/anuncio.css">
    <script src="../script/goIndex.js"></script>
    <script src="../script/goAnuncio.js"></script>
</head>

<body>
<div id="contenedor4">
    <header>
        <img src="../img/aje_logo.png" onclick="goIndex()">
        <p>
            <strong>
                <?php $dbh = connect();
                $cont = counterAnuncios($dbh);
                echo $cont; ?>
            </strong> anuncios publicados
        </p>
    </header>
    <?php include "includes/anuncio.logic.php";
    include("includes/print/footer.print.php") ?>

</body>

</html>
