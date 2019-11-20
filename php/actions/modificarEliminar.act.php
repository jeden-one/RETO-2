<?php
include "../database/mysql.php";
$dbh = connect();

if (isset($_POST["modificar"]) && isset($_POST["anuncio"])) {
    $anuncio = $_POST["anuncio"];
    header("location: ../publicarAnuncio.php?action=modificar&anuncio=$anuncio");

} elseif (isset($_POST["eliminar"]) && isset($_POST["anuncio"])) {
    $anuncioSerializado = $_POST["anuncio"];
    $anuncio=unserialize($anuncioSerializado);
    $resultado = deleteAnuncio($dbh, $anuncio->idAnuncio);
    if($resultado==1){
        unlink('../../img/'.$anuncio->foto);
        header("location: ../busqueda.php?action=misAnuncios");
    }
}
close($dbh);