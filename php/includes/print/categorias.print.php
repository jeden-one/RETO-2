<?php
/**
 * imprimir el index las categorias y subcategorias
 */
foreach ($categorias as $categoria) { ?>
    <li class="elementosCategorias" onclick="mostrarSubcategorias(<?= $categoria->id ?>)">
        <div class="divCatImagen"><?= $categoria->nombre ?><img src="../../../img/flechaAbajo.svg" class="flechaAbajo">
            <ul class="listaSubcategorias" style="display: none">
                <?php $subcategorias = searchSubcategoriaByIdCategoria($dbh, $categoria->id);
                foreach ($subcategorias as $subcategoria) { ?>
                    <li class="elementosSubcategorias"><a
                                href="php/busqueda.php?subcategoria=<?= $subcategoria->id_subcategoria ?>"
                                class="enlaceSubcategoria"><?= $subcategoria->subcategoria ?></a></li>
                <?php } ?>
            </ul>
        </div>
    </li>
<?php }