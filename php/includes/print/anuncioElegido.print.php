<?php
/**
 * imprimir el anuncio elegido de busqueda en anuncio
 */
?>
<div id="containerAnuncio">
    <div id="navAnuncio">
        <img src="../../img/<?= $anuncioElegido->fotoUsuario ?>" id="fotoPerfil">
        <strong><p><?= $anuncioElegido->nombreUsuario ?></p></strong>
        <a href="mailto:<?= $anuncioElegido->usuario ?>" id="contactar">Contactar</a>
    </div>
    <h2><?= $anuncioElegido->titulo ?></h2>
    <img src="../../img/<?= $anuncioElegido->fotoAnuncio ?>" id="fotoAnuncio">
</div>
