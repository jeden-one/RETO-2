<?php
if (empty($_POST["busqueda"])) {
    header("location: ../../index.php");
}

if (isset($_POST["busqueda"])) {
    include "../database/mysql.php";
    connect();
    $busqueda = $_POST["busqueda"];
    $dbh = connect();

    $anuncios = searchAnuncioByBusqueda($dbh,$busqueda);

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
    </div>"; ?>

<?php }
echo $anuncios;
?>