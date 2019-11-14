<?php
include '../database/mysql.php';
if(isset($_POST['elegido'])){
    $html = "";
    $dbh=connect();
    $subcategorias=searchSubcategoriaByIdCategoria($dbh,$_POST['elegido']);
    foreach ($subcategorias as $subcategoria){
        $html=$html.'<option value="'.$subcategoria->id_subcategoria.'">'.$subcategoria->subcategoria.'</option>';
    }
    echo $html;
}
