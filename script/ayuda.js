document.addEventListener("DOMContentLoaded", load);

/**
 * Cuando la página carga esconde todos los elementos menos el select que determina la categoría o área donde necesita ayuda
 */
function load() {
    let div = document.getElementById("divOcultar");
    div.style.display = "none";
}

/**
 * Cuando se selecciona un valor que no es 'nada' muestra el formulario completo
 */
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

/**
 * Envia 2 correos, uno al usuario y otro al mail de Ajebask, con los datos rellenados en el formulario
 * @param correoUser
 * @param asunto
 * @param motivo
 * @param mensaje
 */
function enviarAyuda(correoUser, asunto, motivo, mensaje) {
    if (validarMail(correoUser.toUpperCase())) {
        enviarCorreo("notif.ajebask@gmail.com", "ayuda", "Ayuda: " + motivo + " - " + asunto, mensaje);
        enviarCorreo(correoUser, "ayuda", "Ayuda: " + motivo + " - " + asunto, mensaje);
    } else {
        alert("Email no válido");
    }
}