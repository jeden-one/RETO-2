<?php include "includes/publicarAnuncioEntrada.logic.php"; ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Publicar Anuncio</title>
    <link href="../css/general.css" rel="stylesheet">
    <link href="../css/normalize.css" rel="stylesheet">
    <link rel="stylesheet" href="../css/publicarAnuncio.css">
    <script src="../../script/librerias/jQuery/jquery-3.4.1.js"></script>
    <script src="../script/goIndex.js"></script>
</head>

<body>
<div id="contenedor6">
    <header>
        <img src="../../img/aje_logo.png" onclick="goIndex()">
    </header>

    <?php include "includes/publicarAnuncio.logic.php";
    include "includes/print/footer.print.php"; ?>

</div>
<script src="../script/publicarAnuncio.js"></script>
</body>

</html>
