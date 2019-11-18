<?php
include "../database/mysql.php";
$dbh = connect();

if (isset($_POST["modificar"]) && isset($_GET["anuncio"])) {
    $anuncio = $_GET["anuncio"];

    header("location: ../publicarAnuncio.php?action=modificar&anuncio=$anuncio");

} elseif (isset($_POST["confirmacion"]) && isset($_GET["anuncio"])) {
    $anuncio = $_GET["anuncio"];

    $resultado = deleteAnuncio($dbh,$anuncio->idAnuncio);
    echo $resultado . "filas borradas";
}
?>