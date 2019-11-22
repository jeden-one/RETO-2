<?php
/**
 * mirar desde que pagina has entrado a login o si lo ahs hecho directamente desde la url
 */
if (isset($_COOKIE['usuario'])) {
    header("Location:../index.php");
}
if (isset($_GET['action'])) {
    switch ($_GET['action']) {
        case 'publicarAnuncio':
            $action = 'publicarAnuncio';
            break;
        case 'editarPerfil':
            $action = 'editarPerfil';
            break;
        case 'misAnuncios':
            $action = 'misAnuncios';
            break;
        case 'login':
            $action = 'login';
            break;
    }
} else {
    $action = 'login';
}


/**
 * mostrar los mensajes de error
 *
 */
function comprobarDatos()
{
    if (isset($_GET['error'])) {
        switch ($_GET['error']) {
            case 1:
                ?>
                <span>contraseña incorrecta</span>
                <?php break;
            case 2:
                ?>
                <span>datos no introducidos</span>
                <?php break;
        }
    }
}