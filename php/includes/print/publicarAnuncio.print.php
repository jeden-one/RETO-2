<?php

?>
<h1>Publicar Anuncio</h1>
<form id="datos" method="post" action="actions/publicarAnuncio.act.php?action=publicar"
      enctype="multipart/form-data">
    <label for="titulo"><p class="text">Titulo:</p> </label><input type="text" name="titulo" id="titulo">
    <label for="descripcion"><p class="text">Descripcion:</p> </label><textarea name="descripcion" id="descripcion"></textarea>
    <label><p class="text">Imagen:</p> </label><input type="file" name="foto" accept="image/x-png,image/gif,image/jpeg">
    <div class="selector">
        <label for="categoria"><p class="text">Categoria: </p></label>
        <select id="categoria">
            <?php include 'categoriaSelect.print.php';?>
        </select>
    </div>
    <div class="selector">
        <label for="subcategoria"><p class="text">Subcategoria: </p></label>
        <select name="subcategoria" id="subcategoria">
        </select>
    </div>
    <input type="submit" value="Publicar">
</form>
