<?php include("Includes/inc_header2.php") ?>
<form method="post">
    <h1>Petición de registro</h1>
    <input type="text" name="nif" id="nif" placeholder="NIF">
    <input type="text" name="nombre" id="nombre" placeholder="Nombre">
    <input type="email" name="email" id="email" placeholder="Email">
    <input type="button" value="Enviar Petición" onclick="enviarCorreo()">

    <div id="separar"></div>

    <div id="divLogin">
        Ya tienes una cuenta? <br><br>
        <a href="login.php">Inicia sesión</a>
    </div>
</form>
<script src="../librerias/SmtpJS.com-v3.0.0/SmtpJS.js"></script>
<script src="envioCorreo.js"></script>
<?php include("Includes/inc_footer.php") ?>
