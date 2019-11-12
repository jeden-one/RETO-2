<script src="../../script/index.js"></script>
<div id="categorias">
    <ul id="listaCategorias">
        <?php
        include_once "../database/mysql.php";
        $dbh = connect();
        $resultado = searchCategoriaAll($dbh);
        foreach ($resultado as $value) {
            $subcategorias = searchSubcategoriaByIdCategoria($dbh, $value->id);
            $subcategoriasIl = '';
            foreach ($subcategorias as $valor) {
                $subcategoriasIl = $subcategoriasIl . '<li class="elementosSubcategorias">' . $valor->subcategoria . '</li>';
            }
            $subcategoriasUl = '<ul class="listaSubcategorias">' . $subcategoriasIl . '</ul>';
            echo '<li class="elementosCategorias" onclick="mostrarSubcategorias(' . $value->id . ')">' . $value->nombre . '
                <img src="../../img/flechaAbajo.svg" class="flechaAbajo">' . $subcategoriasUl . '</li>';
        }
        ?>
    </ul>
</div>


