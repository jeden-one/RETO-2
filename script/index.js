/**
 * Funcion para mostrar o ocultar las
 * subcategorias al clickar en la categoría que queramos
 * @param numero para saber que lista es la que se quiere desplegar
 */
function mostrarSubcategorias(numero) {
    let subCategorias = document.getElementsByClassName("listaSubcategorias");
    let num = numero - 1;
    if (subCategorias[num].style.display === "none") {
        subCategorias[num].style.display = "block";
    } else {
        subCategorias[num].style.display = "none";
    }
}


