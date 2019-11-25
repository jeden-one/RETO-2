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
            document.getElementById("btnRegistro").addEventListener("click", function () {
                if (validarNif(document.getElementById("nif").value.toUpperCase())) {
                    if (validarTexto(document.getElementById("nombre").value.toUpperCase())) {
                        if (validarMail(document.getElementById("email").value.toUpperCase())) {
                            Email.send({
                                SecureToken: "c3bc4c76-1735-49dc-ba90-5de15fba9b96",
                                To: destinatario,
                                From: "notif.ajebask@gmail.com",
                                Subject: "Solicitud de inscripcion de nueva empresa",
                                Body: 'NIF de la Empresa:' + $("#nif").val() + '<br>' +
                                    'Nombre de la empresa:' + $("#nombre").val() + '<br>' +
                                    'Email de la empresa: ' + $("#email").val()
                            }).then(
                                message => alert(message)
                            );
                        } else {
                            alert("No es un email válido");
                        }
                    } else {
                        alert("No es un nombre de empresa válido, mínimo 2 caracteres alfanuméricos, sin ñ ni símbolos");
                    }
                } else {
                    alert("No es un Nif válido, debe estar escrito de estar forma Ejemplo: 30444713G");
                }
            });
            break;
        case "ayuda":
            Email.send({
                SecureToken: "c3bc4c76-1735-49dc-ba90-5de15fba9b96",
                To: destinatario,
                From: "notif.ajebask@gmail.com",
                Subject: asunto,
                Body: mensaje
            }).then(
                message => alert(message)
            );
            break;
    }
}

function envioRegistro() {
    enviarCorreo($('#email').val(), 'registro');
    enviarCorreo('notif.ajebask@gmail.com', 'registro');
}