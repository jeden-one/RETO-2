document.addEventListener("DOMContentLoaded", load);


function load() {
    let div = document.getElementById("divOcultar");
    //div.style.display = "none";

}

function seleccionarValor() {
    let select = document.getElementById("listaAsuntos");
    let option = select.options[select.selectedIndex].value;
    let div = document.getElementById("divOcultar");

    if (option != "nada") {
        //div.style.display = "block";
    } else {
        //div.style.display = "none";
    }
}

function enviarAyuda(correoUser, asunto, motivo, mensaje) {
    let regExpCorreo = new RegExp("^[A-Z]{3,}[@][A-Z]{3,}[.][A-Z]{2,}$");
    if (regExpCorreo.test(correoUser.toUpperCase())) {
        enviarCorreo("ajebask.notificaciones@gmail.com", "ayuda", "Ayuda: " + motivo + " - " + asunto, mensaje);
        enviarCorreo(correoUser, "ayuda", "Ayuda: " + motivo + " - " + asunto, mensaje);
        console.log("Mail bien");
    } else {
        console.log("Mail mal");
    }
}

function goIndex() {
    window.location.href = "../../index.php";
}