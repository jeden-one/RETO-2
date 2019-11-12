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
    <h1>Inicia sesión y empieza a publicitar tus productos </h1>
    <input type="text" id="usuario" name="usuario" placeholder="Usuario" autofocus>
    <input type="text" id="pass" name="pass" placeholder="Contraseña">
    <input type="button" id="login" value="Iniciar sesión">

    <div id="separar"></div>

    <div id="divLogin">
        Aún no tienes una cuenta? <br><br>
        <a href="registro.php">Solicítala aquí</a>
    </div>

</form>
</div>
<script src="../script/login.js"></script>
<?php include("includes/inc_footer.php") ?>
