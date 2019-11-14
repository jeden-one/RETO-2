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