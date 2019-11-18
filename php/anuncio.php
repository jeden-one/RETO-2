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
</head>

<body>
<div id="contenedor4">
    <header>
        <img src="../img/aje_logo.png">
        <p>
            <strong>
                <?php $dbh = connect();
                $cont = counterAnuncios($dbh);
                echo $cont; ?>
            </strong> anuncios publicados
        </p>
    </header>
    <?php include "includes/inc_anuncio.php";
    include("includes/inc_footer.php") ?>

</body>

</html>
