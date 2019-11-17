<?php
include "../database/mysql.php";
$dbh = connect();

if (isset($_GET['anuncio'])) {
    $anuncio = unserialize($_GET['anuncio']);
    ?>
    <div id="containerAnuncio">
        <div id="navAnuncio">
            <img src="../../img/"<?= $anuncio->fotoUsuario ?>>
            <p><?= $anuncio->nombreUsuario ?></p>
            <input type="button" value="Contactar" id="contactar">
        </div>
        <img src="../../img/<?= $anuncio->fotoAnuncio ?>">
        <h2><?= $anuncio->titulo ?></h2>

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

