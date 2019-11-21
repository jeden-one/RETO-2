<?php
/**
 * imprimir los anuncios de la misma subcategoria que el anuncio elegido en la pagina anuncio
 */
?>

<div id="anuncios">
    <?php foreach ($anuncios as $anuncio) {
        $anuncioSerializado = serialize($anuncio); ?>
        <a class="anuncio" href='anuncio.php?anuncio=<?= $anuncioSerializado ?>'>
            <div class="anuncio">
                <div class="imagenDiv">
                    <img src="../../img/<?= $anuncio->fotoAnuncio ?>">
                </div>
                <h2><?= $anuncio->titulo ?></h2>
                <h3><?= $anuncio->nombreUsuario ?></h3>
                <p><?= $anuncio->fechaCreacion ?></p>
            </div>
        </a>
    <?php } ?>
</div>
