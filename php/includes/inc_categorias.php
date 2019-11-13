<?php
$dbh = connect();
$categorias = searchCategoriaAll($dbh);
close($dbh); ?>
<div id="categorias">
    <ul id="listaCategorias">
        <?php foreach ($categorias as $categoria) { ?>
            <li class="elementosCategorias" onclick="mostrarSubcategorias(<?= $categoria->id ?>)"><?= $categoria->nombre ?>
                <img src="../../img/flechaAbajo.svg" class="flechaAbajo">
                <ul class="listaSubcategorias" onclick="mostrarSubcategorias(<?= $categoria->id ?>)">
                    <?php
                    $subcategorias = searchSubcategoriaByIdCategoria($dbh, $categoria->id);
                    foreach ($subcategorias as $subcategoria) { ?>
                        <li class="elementosSubcategorias"><?= $subcategoria->subcategoria ?></li>
                    <?php } ?>
                </ul>
            </li>
        <?php } ?>
    </ul>
</div>