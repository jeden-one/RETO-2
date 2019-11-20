<?php

foreach ($subcategorias as $subcategoria) {
    if ($anuncio->subcategoria == $subcategoria->id_subcategoria) {
        ?>
        <option value="<?= $subcategoria->id ?>"selected><?= $subcategoria->subcategoria ?> </option>
    <?php } else {
        ?>
        <option value="<?= $subcategoria->id ?>"><?= $subcategoria->subcategoria ?></option>
    <?php }
} ?>
