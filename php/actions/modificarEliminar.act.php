<?php
include "../database/mysql.php";
$dbh = connect();

if (isset($_POST["modificar"]) && isset($_GET["anuncio"])) {
    $anuncio = $_GET["anuncio"];

    header("location: ../modificarAnuncio.php?anuncio=$anuncio");

} elseif (isset($_POST["confirmacion"]) && isset($_GET["anuncio"])) {
    $anuncio = $_GET["anuncio"];

    deleteAnuncio($dbh,$anuncio->idAnuncio);
}
?>