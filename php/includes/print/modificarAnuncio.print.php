
<form id="datos" method="post" action="actions/publicarAnuncio.act.php"
      enctype="multipart/form-data">
    <h1>Modificar Anuncio</h1>
    <input type="hidden" value="<?= $anuncio->idAnuncio ?>" name="idPasar">
    <input id="imagen" type="file" name="foto" accept="image/x-png,image/gif,image/jpeg"/>
    <label for="titulo">Titulo: </label>
    <input id="titulo" type="text" name="titulo" value="<?= $anuncio->titulo ?>">
    <label for="desc">descripcion: </label>
    <textarea id="desc" name="descripcion"><?= $anuncio->descripcion ?></textarea>
    <div class="selector">
        <label for="categoria">Categoria:</label>
        <select id="categoria">
            <?php include 'categoriaSelectMisAnuncios.print.php' ?>
        </select>
    </div>
    <div class="selector">
        <label for="subcategoria">Subcategoria:</label>
        <select name="subcategoria" id="subcategoria">
            <?php include 'subcategoriasMisAnuncios.print.php' ?>
        </select>
    </div>
    <input type="submit" name="action" value="Modificar">
</form>
