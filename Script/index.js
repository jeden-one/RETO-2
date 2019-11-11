/**
 * Funcion para mostrar o ocultar las
 * subcategorias al clickar en la categoría que queramos
 * @param numero para saber que lista es la que se quiere desplegar
 */
function mostrarSubcategorias(numero) {
    let subCategorias = document.getElementsByClassName("listaSubcategorias");

        if (subCategorias[numero].style.display === "none") {
            subCategorias[numero].style.display = "inline-flex";
       } else {
            subCategorias[numero].style.display = "none";
        }
}


