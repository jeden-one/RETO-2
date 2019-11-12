/**
 * encriptar un string mediante una clave
 *
 * @param pass contraseña a encriptar
 * @returns {any[]} array la palabra encriptada y la clave
 */
function encriptar(pass) {
    var string = pass;
    var password = 'my-password';
    var encrypted = CryptoJS.AES.encrypt(string, password);
    return encrypted;
}

$('#login').click(
    passEncriptado = encriptar($("#pass").val()),
    function () {
        let loginJSON = {
            "usuario": $("#usuario").val(),
            "password": passEncriptado
        };
        $.ajax({
            url: 'actions/login.act.php',
            type: 'post',
            data: loginJSON,
            dataType: 'json',
            success: $(location).attr('href', 'actions/login.act.php')
        })
    }
)
