/**
 * Funcion para mostrar o ocultar las
 * subcategorias al clickar en la categoría que queramos
 * @param numero para saber que lista es la que se quiere desplegar
 */
function mostrarSubcategorias(numero) {
    let subCategorias = document.getElementsByClassName("listaSubcategorias");
    alert(numero);

        if (subCategorias[numero-1].style.display === "none") {
            subCategorias[numero-1].style.display = "inline-flex";
       } else {
            subCategorias[numero-1].style.display = "none";
        }
}


