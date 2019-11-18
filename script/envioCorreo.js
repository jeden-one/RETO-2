function enviarCorreo(destinatario) {
    Email.send({
        SecureToken: "22f58ae1-05af-46d3-8311-f594616fcd44",
        To: destinatario,
        From: "ajebask.notificaciones@gmail.com",
        Subject: "Inscripcion Nueva Empresa",
        Body: 'NIF de la Empresa:' + $("#nif").val() + '<br>' +
            'Nombre de la empresa:' + $("#nombre").val() + '<br>' +
            'Email de la empresa: ' + $("#email").val()
    }).then(
        //alert('Solicitud enviada correctamente, espere un email de respuesta con sus credenciales')
        message => alert(message)
    );
}