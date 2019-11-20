<?php
if ($_GET["action"] == "publicar") {
    include "print/publicarAnuncio.print.php";

 } elseif ($_GET["action"] == "modificar") {
    $anuncio = $_GET["anuncio"];
    include "print/modificarAnuncio.print.php";
}
?>
