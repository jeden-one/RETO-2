<?php

$dbh = connect();
$categorias = searchCategoriaAll($dbh);
close($dbh);
?><option value="0" selected>--------</option><?php
foreach ($categorias as $categoria) { ?>
    <option value="<?= $categoria->id ?>"><?= $categoria->nombre ?>
    </option>
<?php } ?>