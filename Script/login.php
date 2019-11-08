<?php include("Includes/inc_header2.php")?>

<form>
    <h1>Inica sesión y empieza a publicitar tus productos </h1>
    <input type="text" id="usuario" placeholder="Usuario">
    <input type="text" id="pass" placeholder="Contraseña">
    <input type="submit" id="login" value="Iniciar sesión">

    <div id="separar"></div>

    <div id="divLogin">
        Aún no tienes una cuenta? <br><br>
        <a href="registro.php">Solicítala aquí</a>
    </div>

</form>
<script src="login.js"></script>
<?php include("Includes/inc_footer")?>
