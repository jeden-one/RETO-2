function goMisAnuncios() {
    window.location.href = "busqueda.php?action=misAnuncios";
}
function goPublicarAnuncio() {
    window.location.href = "publicarAnuncio.php?action=publicar";
}
function goIndex() {
    window.location.href = "../../index.php";
}

$('#anuncio').click(function () {
    $.ajax({
        url:'includes/print/anunciosBusqueda.print.php',
        type:'GET',
        success:function () {

        }

    })
})