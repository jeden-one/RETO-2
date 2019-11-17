/**
 * Funcion para mostrar o ocultar las
 * subcategorias al clickar en la categoría que queramos
 * @param numero para saber que lista es la que se quiere desplegar
 */
function mostrarSubcategorias(numero) {
    let subCategorias = document.getElementsByClassName("listaSubcategorias");
    let enlaceSubcategorias = document.getElementsByClassName("enlaceSubcategoria");
    let elementosSubcategorias = document.getElementsByClassName("elementosSubcategorias");

    /*
    Array.from(elementosSubcategorias).forEach(value => {
        value.style.margin = "10px";
        value.style.border = "1px solid #910000";
        value.style.borderRadius = "20px";
        value.style.backgroundColor = "#910000";
        value.style.padding = "5px 15px";
        value.style.padding = "5px 15px";
    })
     */
    let
        num = numero - 1;

    if (subCategorias[num].style.display === "none") {
        subCategorias[num].style.display = "flex";
        subCategorias[num].style.flexWrap = "wrap";
        //subCategorias[num].style.justifyContent = "space-between";
        let arraySubcategorias = Array.from(enlaceSubcategorias);
        arraySubcategorias.forEach(value => {
            //console.log(value);
            value.style.textDecoration = "none";
        });
    } else {
        subCategorias[num].style.display = "none";
    }
}

function goIndex() {
    window.location.href = "index.php";
}
function goLogin() {
    window.location.href = "php/login.php";
}
