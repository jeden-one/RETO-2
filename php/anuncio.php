<?php
/**
 * pagina para mostrar el anuncio elegido en la busqueda
 */
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
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="../script/enrutado.js"></script>
</head>

<body>
<div id="contenedor4">
    <header>
        <img src="../img/aje_logo.png" onclick="goIndex()">
    </header>
    <?php include "includes/anuncio.logic.php";
    include("includes/print/footer.print.php") ?>

</body>

</html>
