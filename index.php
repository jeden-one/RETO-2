<?php include "php/includes/inc_header.php"; ?>
    <nav>
        <input type="text">
        <input type="button" name="buscar" value="Buscar" id="buscar">

        <div id="botones">
            <input type="button" value="Mis Anuncios">
            <input type="button" value="Publicar Anuncio">
            <input type="button" value="Editar Perfil">
        </div>
    </nav>
    <a href="#header"><img src="img/flecha.svg" id="flechaSubir"></a>

<?php
include_once "php/database/mysql.php";
include "php/includes/inc_categorias.php";
include "php/includes/inc_footer.php";

?>