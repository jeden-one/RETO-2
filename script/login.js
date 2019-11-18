//se usara para hacer una funcion axaj para ver si el usuario existe
$('#usuario').focusout(function () {
    let usuario = new Object();
    usuario.usuario = $('#usuario').val();
    $.ajax({
        url: "actions/validarUsuario.act.php",
        type: 'POST',
        data: usuario,
        datatype: 'application/json',
        success: function (data) {
            if (data == 'true') {
                $('#pass').removeAttr('readonly');
                $('#pass').css('backgroundColor', '#ebebeb');
            } else {
                $('#pass').attr('readonly');
                $('#pass').css('backgroundColor', '#a7afae');
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR + " " + textStatus + " " + errorThrown);
        }
    });

    let contrasenya = $('#pass');
    contrasenya.click(function () {
        $('#usuario').trigger('focusout');
    });
});