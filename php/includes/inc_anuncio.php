<?php
include "../database/mysql.php";
$dbh = connect();

if (isset($_GET['anuncio'])) {
    $anuncio = unserialize($_GET['anuncio']);
    ?>
    <div id="containerAnuncio">
        <div id="navAnuncio">
            <img src="../../img/<?= $anuncio->fotoUsuario ?>" id="fotoPerfil">
            <strong><p><?= $anuncio->nombreUsuario ?></p></strong>
            <a href="mailto:<?= $anuncio->nombreUsuario ?>" id="contactar">Contactar</a>
        </div>
        <h2><?= $anuncio->titulo ?></h2>
        <img src="../../img/<?= $anuncio->fotoAnuncio ?>" id="fotoAnuncio">
    </div>
    <?php
        $anuncios = searchAnuncioBySubcategoria($dbh, $anuncio->subcategoria);
    ?>
    <div id="anuncios">
        <?php foreach ($anuncios as $anuncio) {
            $anuncioSerializado = serialize($anuncio); ?>
            <a class="anuncio" href="anuncio.php?anuncio="<?php $anuncioSerializado ?>><div class="anuncio">
                    <div class="imagenDiv">
                        <img src="../../img/<?= $anuncio->fotoAnuncio ?>">
                    </div>
                    <h2><?= $anuncio->titulo ?></h2>
                    <h3><?= $anuncio->nombreUsuario ?></h3>
                    <p><?= $anuncio->fechaCreacion ?></p>
                </div></a>
        <?php } ?>
    </div>
<?php } ?>

