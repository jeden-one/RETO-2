<?php
$html = "";
foreach ($subcategorias as $subcategoria) {
    $html = $html . '<option value="' . $subcategoria->id_subcategoria . '">' . $subcategoria->subcategoria . '</option>';
}
echo $html;
