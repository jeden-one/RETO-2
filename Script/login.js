$(document).ready(
    $('#login').click(
        function () {
            let loginJSON = {
                "usuario": document.getElementById('usuario').value(),
                "password": document.getElementById('pass').value()
            };
            $.ajax({
                url:'algun php',
                type: 'post',
                data: loginJSON,
                dataType: 'json',
                contentType: 'application/json',
                success: alert('todo bien')
            })
        }
    )
)