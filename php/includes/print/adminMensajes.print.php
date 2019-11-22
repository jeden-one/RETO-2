<?php
/**
 * mensajes para el administador
 */
function mensajes()
{
    if ($_GET['error']) {
        if ($_GET['error'] == 1) {
            echo '<span>datos necesarios faltantes</span>';
        }
    }
    if ($_GET['mensaje']) {
        switch ($_GET['mensaje']) {
            case 1:
                echo '<span>Usuario insertado</span>';
                break;
            case 2:
                echo '<span>Usuario no insertado</span>';
                break;
            case 3:
                echo '<span>Categoria insertada</span>';
                break;
            case 4:
                echo '<span>Categoria no insertada</span>';
                break;
            case 5:
                echo '<span>Subcategoria insertada</span>';
                break;
            case 6:
                echo '<span>Subcategoria no insertada</span>';
                break;
        }
    }
}
