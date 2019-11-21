<?php

foreach ($subcategorias as $subcategoria) {
    if ($anuncio->subcategoria == $subcategoria->id_subcategoria) {
        ?>
        <option value="<?= $subcategoria->id_subcategoria ?>"selected><?= $subcategoria->subcategoria ?> </option>
    <?php } else {
        ?>
        <option value="<?= $subcategoria->id_subcategoria ?>"><?= $subcategoria->subcategoria ?></option>
    <?php }
} ?>
