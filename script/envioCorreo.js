function enviarCorreo() {
    Email.send({
        SecureToken: "8b6e9d56-dad7-459d-9ea7-331845c3ddb0",
        To: 'jeden.egibide@gmail.com',
        From: "jeden.egibide@gmail.com",
        Subject: "Inscripcion Nueva Empresa",
        Body: 'NIF de la Empresa:' + $("#nif").val() + '<br>' +
            'Nombre de la empresa:' + $("#nombre").val() + '<br>' +
            'Email de la empresa: ' + $("#email").val()
    }).then(
        alert('Solicitud enviada correctamente, espere un email de respuesta con sus credenciales')
    );
}