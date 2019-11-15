//se usara para hacer una funcion axaj para ver si el usuario existe
/*$('#usuario').focusout(function () {
    let usuario = {"usuario": $('#usuario').val()};
    $.ajax({
        url: "actions/validarUsuario.act.php",
        type: 'POST',
        data: usuario,
        dataType: 'json',
        success: console.log("bien")


        function () {
        console.log('enviado');
    },
    error: function () {
        console.log("no se ha podido obtener la informacion");
    }


    })
})*/

//se usara para hacer una funcion axaj para ver si el usuario existe
$('#usuario').focusout(function () {
    var usuario = new Object();
    usuario.usuario = $('#usuario').val();
    $.ajax({
        url: "actions/validarUsuario.act.php",
        type: 'POST',
        data: usuario,
        datatype: 'application/json',
        success: function (data) {
            console.log(data)
            if(data=='true'){
                $('#pass').removeAttr('disabled');
            }
            else{
                $('#pass').attr('disabled','disabled');
            }
        },
        error: function (jqXHR, textStatus, errorThrown) {
            console.log(jqXHR + " " + textStatus + " " + errorThrown);
        }
    })
});