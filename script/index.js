/**
 * Funcion para mostrar o ocultar las
 * subcategorias al clickar en la categoría que queramos
 * @param numero para saber que lista es la que se quiere desplegar
 */
function mostrarSubcategorias(numero) {
    let subCategorias = document.getElementsByClassName("listaSubcategorias");
    let enlaceSubcategorias = document.getElementsByClassName("enlaceSubcategoria");
    let num = numero - 1;

    if (subCategorias[num].style.display === "none") {
        subCategorias[num].style.display = "flex";
        subCategorias[num].style.flexDirection = "row";
        subCategorias[num].style.padding= "25px";
        enlaceSubcategorias.style.border = "1px solid black";
        enlaceSubcategorias.style.textDecoration = "none";

    } else {
        subCategorias[num].style.display = "none";
    }
}


