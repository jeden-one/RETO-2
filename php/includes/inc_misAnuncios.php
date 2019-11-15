<?php
if (isset($_COOKIE["usuario"])) {
$dbh = connect();
$anuncios = searchAnuncioByUsuario($dbh, $_COOKIE["usuario"]);
?>

<div id="anuncios">
    <?php foreach ($anuncios as $anuncio) { ?>
        <div class="anuncio">
            <div class="imagenDiv">
                <img src="../../img/<?= $anuncio->foto ?>">
            </div>
            <h2><?= $anuncio->titulo ?></h2>
            <h3><?= $anuncio->usuario ?></h3>
            <p><?= $anuncio->fecha_creacion ?></p>
        </div>
    <?php }
    } ?>
</div>