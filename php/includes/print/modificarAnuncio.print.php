<?php
?>
<form id="datos" method="post" action="actions/publicarAnuncio.act.php?action=modificar&anuncio=<?= $anuncio ?>"
      enctype="multipart/form-data">
    <h1>Modificar Anuncio</h1>
    <label for="titulo">Titulo: </label><input id="titulo" type="text" name="titulo"
                                               value="<?= $anuncio->titulo ?>">
    <label for="desc">descripcion: </label><textarea id="desc"
                                                     name="descripcion"><?= $anuncio->descripcion ?></textarea>
    <label for="imagen">Imagen: </label>
    <input id="imagen" type="file" name="foto" accept="image/x-png,image/gif,image/jpeg"
           value="<?= $anuncio->foto ?>"/>
    <div class="selector">
        <label for="categoria">Categoria:</label>
        <select id="categoria">
            <?php include 'categoriasSolo.print.php' ?>
        </select>
    </div>
    <div class="selector">
        <label for="subcategoria">Subcategoria:</label>
        <select name="subcategoria" id="subcategoria">
        </select>
    </div>
    <input type="submit" value="Actualizar Anuncio">
</form>
