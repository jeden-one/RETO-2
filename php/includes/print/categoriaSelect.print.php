<option value="0" selected>--------</option><?php
foreach ($categorias as $categoria) { ?>
    <option value="<?= $categoria->id ?>" id="<?=$categoria->id?>"><?= $categoria->nombre ?></option>
<?php } ?>
