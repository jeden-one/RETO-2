<script>
    let enlaces = document.getElementById("enlaces");
    enlaces.style.display = "none";
</script>

<div id="anuncios">
    <?php foreach ($anuncios as $anuncio) {
        $anuncioSerializado = serialize($anuncio) ?>
        <form action='../php/actions/modificarEliminar.act.php' method="post">
            <div class="anuncio">
                <div class="imagenDiv">
                    <img src="../../img/<?= $anuncio->foto ?>">
                </div>
                <div class="infoanuncio">
                    <div class="datosAnuncio">
                        <h2><?= $anuncio->titulo ?></h2>
                        <p><?= $anuncio->fecha_creacion ?></p>
                        <input type="hidden" name="anuncio" value='<?= $anuncioSerializado?>'>
                    </div>
                    <div class="botonesAnuncio">
                        <input type="submit" name="eliminar" value="Eliminar">
                        <input type="submit" name="modificar" value="Modificar">
                    </div>
                </div>
            </div>
        </form>
    <?php }
    ?>
</div>


