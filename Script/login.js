$('#login').click(
    datosPass=encriptar($("#pass").val()),
    localStorage.setItem("llave",datosPass[1]),
    function () {
        let loginJSON = {
            "usuario": $("#usuario").val(),
            "password":datosPass[0]
        };
        $.ajax({
            url: 'actions/login.act.php',
            type: 'post',
            data: loginJSON,
            dataType: 'json',
            success: $(location).attr('href','actions/login.act.php')
        })
    }
)
