<?php
if (isset($_COOKIE["usuario"])) {
$dbh = connect();
$anuncios = searchAnuncioByUsuario($dbh, $_COOKIE["usuario"]);
?>

<div id="anuncios">
    <?php foreach ($anuncios as $anuncio) { ?>
        <form action="../actions/modificarEliminar.act.php?anuncio=<?= $anuncio ?>" method="post">
            <div class="anuncio">
                <div class="imagenDiv">
                    <img src="../../img/<?= $anuncio->foto ?>">
                </div>
                <h2><?= $anuncio->titulo ?></h2>
                <h3><?= $anuncio->usuario ?></h3>
                <p><?= $anuncio->fecha_creacion ?></p>
                <input type="submit" name="eliminar" value="Eliminar" ">
                <input type="submit" name="modificar" value="Modificar">
            </div>
        </form>
    <?php }
} ?>
</div>
