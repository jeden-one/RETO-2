<?php include("includes/inc_header2.php");
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
    <h1>Inicio de sesión</h1>
    <input type="email" id="usuario" name="usuario" placeholder="Usuario" autofocus>
    <input type="password" id="pass" name="pass" placeholder="Contraseña">
    <input type="submit" id="login" value="Iniciar sesión">

    <div id="separar"></div>

    <div id="divLogin">
        <a href="registro.php">Aún no tienes una cuenta?</a>
    </div>
</form>
<script src="../script/login.js"></script>
<?php include("includes/inc_footer.php") ?>
