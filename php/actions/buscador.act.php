<?php
if (empty($_POST["busqueda"])) {
    header("location: ../../index.php");
}

if (isset($_POST["busqueda"])) {
    $busqueda = $_POST["busqueda"];
    $dbh = connect();

    $resultado = searchAnuncioByBusqueda($dbh,$busqueda);
}
?>