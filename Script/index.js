/**
 * Funcion para mostrar o ocultar las
 * subcategorias al clickar en la categoría que queramos
 * @param {*} numero
 */
function mostrarSubcategorias(numero) {
    let subCategorias = document.getElementsByClassName("listaSubcategorias");

        if (subCategorias[numero].style.display === "none") {
            subCategorias[numero].style.display = "inline-flex";
       } else {
            subCategorias[numero].style.display = "none";
        }
}


