<?php
/**
 * pagina donde mandas un correo a ajebask para solicitar una cuenta de usuario
 */
if (isset($_COOKIE['usuario'])) {
    header("Location:../index.php");
}
include("includes/print/header.print.php") ?>
<script src="../script/validaciones.js"></script>
<form method="post">
    <h1>Petición de registro</h1>
    <input type="text" name="nif" id="nif" placeholder="NIF">
    <input type="text" name="nombre" id="nombre" placeholder="Nombre">
    <input type="email" name="email" id="email" placeholder="Email">
    <input type="button" value="Enviar Petición" id="btnRegistro" onclick="enviarCorreo($('#email').val(), 'registro');
        enviarCorreo('ajebask.notificaciones@gmail.com', 'registro');">
    <div id="separar"></div>

    <div id="divLogin">
        <a href="login.php">Ya tienes cuenta?</a>
    </div>
</form>
<script src="../script/librerias/SmtpJS.com-v3.0.0/SmtpJS.js"></script>
<script src="../script/envioCorreo.js"></script>
<?php include("includes/print/footer.print.php") ?>
