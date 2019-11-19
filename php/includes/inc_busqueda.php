<?php
if (isset($_GET['action']) && $_GET['action'] == 'misAnuncios') {
    if (!isset($_COOKIE["usuario"])) {
        header('location:login.php?action=misAnuncios');
    } else {
        include 'includes/inc_misAnuncios.php'; ?>
    <script>
            let enlaces = document.getElementById("enlaces");
            enlaces.style.display = "none";
    </script>
<?php
    }
} elseif (isset($_GET["anuncios"])) {
    include "includes/inc_anunciosBusqueda.php";
}