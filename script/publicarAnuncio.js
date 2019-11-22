/**
 * cuando se elige una categoria se busca en la base de datos las subcategorias de esa categoria y se insertan el la select de subcategorias
 */
$(document).ready(function () {
    $("#categoria").on('change', function () {
        $("#categoria option:selected").each(function () {
            elegido = $(this).val();
            $.post("actions/categoriaSubcategoria.act.php", {elegido: elegido}, function (data) {
                $("#subcategoria").html(data);
            });
        });
    });
});