<?php include("includes/inc_header2.php");
if (isset($_COOKIE['usuario'])) {
    header("Location:../index.php");
}
switch ($_GET['action']) {
    case 'publicarAnuncio':
        $action = 'publicarAnuncio';
        break;
    case 'editarPerfil':
        $action = 'editarPerfil';
        break;
    case 'misAnuncios':
        $action = 'misAnuncios';
        break;
    case 'login':
        $action = 'login';
        break;
}

if (isset($_GET['error'])) {
    if ($_GET['error'] == 1) {
        ?>
        <script>alert('contraseña incorrecta')</script>
        <?php
    }
    if ($_GET['error'] == 2) {
        ?>
        <script>alert('usuario no encontrado')</script>
        <?php
    }
} ?>

<form method="post" action="actions/login.act.php">
    <h1>Inicia sesión y empieza a publicitar tus productos </h1>
    <input type="text" id="usuario" name="usuario" placeholder="Usuario" autofocus>
    <input type="text" id="pass" name="pass" placeholder="Contraseña" readonly>
    <input type="hidden" name="action" value="<?= $action ?>">
    <input type="submit" id="login" value="Iniciar sesión">

    <div id="separar"></div>

    <div id="divLogin">
        <a href="registro.php">Aún no tienes una cuenta?</a>
    </div>
</form>
<script src="../script/login.js"></script>
<?php include("includes/inc_footer.php") ?>
