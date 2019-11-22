function validarNif(cadena) {
    return /^(\d{7,8})([A-HJ-NP-TV-Z])$/.test(cadena) && ("TRWAGMYFPDXBNJZSQVHLCKE"[(RegExp.$1 % 23)] == RegExp.$2);
}

function validarTexto(cadena) {
    let valText = new RegExp("^[A-Z0-9]{2,}$");
    return valText.test(cadena);
}

function validarMail(cadena) {
    let valMail = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return valMail.test(cadena);
}