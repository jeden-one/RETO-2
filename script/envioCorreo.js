/**
 * Envía un correo de registro o con los datos del formulario de ayuda. Se envía al correo de notificaciones de Ajebask
 * y una copia al usuario que rellena la solicitud/formulario.
 *
 * @param destinatario - Determina el To: de la función de enviar email, es decir, el que recibe el email.
 * @param proposito - Según el propósito, registro o ayuda, cambia de contenido el mensaje. El registro envía los datos
 * para una nueva empresa (NIF, nombre de la empresa y mail). El formulario de ayuda envía en el asunto el área donde el
 * usuario ha solicitado la ayuda y un mensaje escrito en un textarea
 * @param asunto - Asunto del email
 * @param mensaje - Contenido del email
 */
function enviarCorreo(destinatario, proposito, asunto, mensaje) {
    switch (proposito) {
        case "registro":
            Email.send({
                SecureToken: "7732a245-1148-45c9-a28b-2c1ac72e73bc",
                To: destinatario,
                From: "ajebask.notificaciones@gmail.com",
                Subject: "Solicitud de inscripcion de nueva empresa",
                Body: 'NIF de la Empresa:' + $("#nif").val() + '<br>' +
                    'Nombre de la empresa:' + $("#nombre").val() + '<br>' +
                    'Email de la empresa: ' + $("#email").val()
            }).then(
            );
            break;
        case "ayuda":
            Email.send({
                SecureToken: "7732a245-1148-45c9-a28b-2c1ac72e73bc",
                To: destinatario,
                From: "ajebask.notificaciones@gmail.com",
                Subject: asunto,
                Body: mensaje
            }).then(
            );
            break;
    }
    window.location.href ="../index.php";
}