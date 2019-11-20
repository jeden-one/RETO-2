<?php
include 'database/mysql.php';
if (!isset($_COOKIE["usuario"])) {
    header("location: login.php?action=publicarAnuncio");
}
?>
