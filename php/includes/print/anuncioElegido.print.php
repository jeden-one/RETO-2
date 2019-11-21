<div id="containerAnuncio">
    <div class="arriba">
        <div class="tituloycat">
            <h2><?= $anuncioElegido->titulo ?></h2>
        </div>
        <div class="imgAnuncio">
            <img src="../../img/<?= $anuncioElegido->fotoAnuncio ?>" id="fotoAnuncio">
        </div>
    </div>
    <div class="medio">
        <p class="titDescripcion">Descripción: </p>
        <p class="descripcion"><?= $anuncioElegido->descripcion ?></p>
        <h3><?= $anuncioElegido->cat ?></h3>
        <h4><?= $anuncioElegido->subcat ?></h4>
        <h5><?= $anuncioElegido->fechaCreacion ?></h5>
    </div>
    <div class="abajo">
        <div id="navAnuncio">
            <img src="../../img/<?= $anuncioElegido->fotoUsuario ?>" id="fotoPerfil">
            <strong><p><?= $anuncioElegido->nombreUsuario ?></p></strong>
            <a href="mailto:<?= $anuncioElegido->usuario ?>" id="contactar">Contactar</a>
        </div>
    </div>
</div>
