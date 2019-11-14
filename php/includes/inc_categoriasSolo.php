<?php

$dbh = connect();
$categorias = searchCategoriaAll($dbh);
close($dbh);
foreach ($categorias as $categoria) { ?>
    <option value="<?= $categoria->id ?>"><?= $categoria->nombre ?>
    </option>
<?php } ?>