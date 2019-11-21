<?php

?>
<h1>Publicar Anuncio</h1>
<form id="datos" method="post" action="actions/publicarAnuncio.act.php?action=publicar"
      enctype="multipart/form-data">
    <label for="titulo">Titulo: </label><input type="text" name="titulo" id="titulo">
    <label for="descripcion">Descripcion: </label><textarea name="descripcion" id="descripcion"></textarea>
    <label>Imagen: </label><input type="file" name="foto" accept="image/x-png,image/gif,image/jpeg">
    <div class="selector">
        <label for="categoria">Categoria: </label>
        <select id="categoria">
            <?php include 'categoriaSelect.print.php'; ?>
        </select>
    </div>
    <div class="selector">
        <label for="subcategoria">Subcategoria: </label>
        <select name="subcategoria" id="subcategoria">
        </select>
    </div>
    <input type="submit" value="Publicar">
</form>
