<?php
/**
 * imprimir las subcategorias en un select dependiendo de la categoria elegida en el select en publicar o modificar anuncio
 */
$html = "";
foreach ($subcategorias as $subcategoria) {
    $html = $html . '<option value="' . $subcategoria->id_subcategoria . '">' . $subcategoria->subcategoria . '</option>';
}
echo $html;
