<script src="../librerias/CryptoJS%20v3.1.2/rollups/aes.js"></script>
<script>
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

    /**
     * desencriptar con la clave
     *
     * @param datosPasar array con dato encriptado y la clave
     * @returns {*|WordArray|PromiseLike<ArrayBuffer>} palabra desencriptada
     */
    function desencriptar(passCifrado){
        var encrypted=passCifrado;
        var password = 'my-password';
        var decrypted = CryptoJS.AES.decrypt(encrypted, password);
        return decrypted;
    }
</script>
