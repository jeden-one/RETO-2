<?php
if (isset($_POST['usuario'])) {
    die("Lo que vas a recibir " . $_POST['usuario']);
} else {
    die('mal');
}