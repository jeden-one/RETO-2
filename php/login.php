<?php
/**
 * pagina donde haces login
 */
include"includes/print/header.print.php";
include'includes/loginEntrada.logic.php';
?>

<form method="post" action="actions/login.act.php">
    <h1>Inicia sesión y empieza a publicitar tus productos </h1>
    <?php comprobarDatos(); ?>
    <input type="text" id="usuario" name="usuario" placeholder="Usuario" autofocus>
    <input type="password" id="pass" name="pass" placeholder="Contraseña" readonly>
    <input type="hidden" name="action" value="<?= $action ?>">
    <input type="submit" id="login" value="Iniciar sesión">

    <div id="separar"></div>

    <div id="divLogin">
        <a href="registro.php">Aún no tienes una cuenta?</a>
    </div>
</form>
<script src="../script/login.js"></script>
<?php
include("includes/print/footer.print.php") ?>
