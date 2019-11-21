/**
 * Funcion para mostrar o ocultar las subcategorias al clickar en la categoría que hemos seleccionado
 *
 * @param numero id de la categoria a la que hace efecto esta funcion
 */
function mostrarSubcategorias(numero) {
    let subCategorias = document.getElementsByClassName("listaSubcategorias");
    let enlaceSubcategorias = document.getElementsByClassName("enlaceSubcategoria");

    let
        num = numero - 1;

    if (subCategorias[num].style.display === "none") {
        subCategorias[num].style.display = "flex";
        subCategorias[num].style.flexWrap = "wrap";
        let arraySubcategorias = Array.from(enlaceSubcategorias);
        arraySubcategorias.forEach(value => {
            value.style.textDecoration = "none";
        });
    } else {
        subCategorias[num].style.display = "none";
    }
}

/**
 * para ir al index clickando al logo de ajebask
 */
function goIndex() {
    window.location.href = "index.php";
}

/**
 * para ir al login al darle al boton de login
 */
function goLogin() {
    window.location.href = "php/login.php?action=login";
}
