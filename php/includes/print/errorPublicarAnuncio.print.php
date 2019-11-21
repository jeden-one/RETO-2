<?php if (isset($_GET["error"])) {
    if ($_GET["error"] == 1) {
        echo "<p style='color: red'>No se han introducido algunos datos obligatorios</p>";
    }
}
