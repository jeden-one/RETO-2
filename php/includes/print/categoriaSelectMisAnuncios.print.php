<?php
foreach ($categorias as $categoria) {
    if ($anuncio->categoria == $categoria->id) {
        ?>
        <option value="<?= $categoria->id ?>" selected><?= $categoria->nombre ?> </option>
    <?php } else {
        ?>
        <option value="<?= $categoria->id ?>"><?= $categoria->nombre ?></option>
    <?php }
} ?>
