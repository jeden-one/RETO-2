document.addEventListener("DOMContentLoaded", load);


function load () {
    let div = document.getElementById("divOcultar");
    div.style.display = "none";

}

function seleccionarValor() {
    let select = document.getElementById("listaAsuntos");
    let option = select.options[select.selectedIndex].value;
    let div = document.getElementById("divOcultar");

    if (option != "nada") {
        div.style.display = "block";
    } else {
        div.style.display = "none";
    }
}

function enviarAyuda() {

        Email.send({
            SecureToken: "8b6e9d56-dad7-459d-9ea7-331845c3ddb0",
            To: 'jeden.egibide@gmail.com',
            From: $("#correo"),
            Subject: $("#asunto")
        }).then(
            alert('Solicitud enviada correctamente, espere un email de respuesta por parte de nuestro equipo de soporte técnico')
        );
}

function goIndex() {
    window.location.href="../../index.php";
}