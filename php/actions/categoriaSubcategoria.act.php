<?php
include '../database/mysql.php';
if(isset($_POST['elegido'])){
    $dbh=connect();
    $subcategorias=searchSubcategoriaByIdCategoria($dbh,$_POST['elegido']);
    foreach ($subcategorias as $subcategoria){
        
    }
}
?>
<!--$html = "";
if ($_POST["elegido"]==1) {
$html = '
<option value="1">4</option>
<option value="2">5</option>
<option value="3">7</option>
<option value="4">21</option>
<option value="5">Scennic</option>
<option value="6">Traffic</option>
';
}
if ($_POST["elegido"]==2) {
$html = '
<option value="1">Ibiza</option>
<option value="2">Toledo</option>
<option value="3">Cordoba</option>
<option value="4">Arosa</option>
';
}
if ($_POST["elegido"]==3) {
$html = '
<option value="1">106</option>
<option value="2">206</option>
<option value="3">306</option>
';
}
echo $html;-->