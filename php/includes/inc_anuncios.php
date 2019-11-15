<?php
if (isset($_GET['anuncios'])) {
    $anuncios = unserialize($_GET['anuncios']);
    ?>
    <div id="anuncios">
        <?php foreach ($anuncios as $anuncio) { ?>
            <div class="anuncio">
                <div class="imagenDiv">
                    <img src="../../img/<?= $anuncio->fotoAnuncio ?>">
                </div>
                <h2><?= $anuncio->titulo ?></h2>
                <h3><?= $anuncio->nombreUsuario ?></h3>
                <p><?= $anuncio->fechaCreacion ?></p>
            </div>
        <?php } ?>
    </div>
<?php } ?>
