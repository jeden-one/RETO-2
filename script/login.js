/**
 * cuando se pierde el foco al insertar el usuario mira si en la base de datos existe para habilitar el apartado de la contraseña
 */
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