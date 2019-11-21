<div id="anuncios">
    <h3>Abajo se muestran anuncios que podrían interesarte</h3>
    <?php foreach ($anuncios as $anuncio) {
        $anuncioSerializado = serialize($anuncio); ?>
        <a class="anuncio" href='anuncio.php?anuncio=<?= $anuncioSerializado ?>'>
            <div class="divAnuncio">
                <div class="imagenDiv">
                    <img src="../../img/<?= $anuncio->fotoAnuncio ?>">
                </div>
                <div class="datosAnuncio">
                    <p><?= $anuncio->titulo ?></p>
                    <p><?= $anuncio->nombreUsuario ?></p>
                    <p><?= $anuncio->fechaCreacion ?></p>
                </div>
            </div>
        </a>
    <?php } ?>
</div>
