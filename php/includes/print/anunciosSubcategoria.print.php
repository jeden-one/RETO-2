<div id="anuncios">
    <?php foreach ($anuncios as $anuncio) {
        $anuncioSerializado = serialize($anuncio); ?>
        <!-- <a class="anuncio" href="anuncio.php?anuncio="> -->
        <div class="anuncio" onclick="irAnuncio(<?= json_encode(unserialize($anuncioSerializado)) ?>)">
            <div class="imagenDiv">
                <img src="../../img/<?= $anuncio->fotoAnuncio ?>">
            </div>
            <h2><?= $anuncio->titulo ?></h2>
            <h3><?= $anuncio->nombreUsuario ?></h3>
            <p><?= $anuncio->fechaCreacion ?></p>
        </div>
        <!-- </a> -->
    <?php } ?>
</div>
