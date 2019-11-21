<?php
/**
 * imprimir las categorias en la select de pubilcar anuncio en el apartado de editar y elegir la categoria del anuncio a editar
 */
foreach ($categorias as $categoria) {
    if ($anuncio->categoria == $categoria->id) {
        ?>
        <option value="<?= $categoria->id ?>" selected><?= $categoria->nombre ?> </option>
    <?php } else {
        ?>
        <option value="<?= $categoria->id ?>"><?= $categoria->nombre ?></option>
    <?php }
} ?>
