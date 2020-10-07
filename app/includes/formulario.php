<?php if (isset($_GET['registro'])) : ?>
    <!-- INICIO FORMULARIO DE REGISTRO -->
    <div class="formulario">
        <h1>Formulario de Registro</h1>
        <?php if (isset($_SESSION['completado'])) : ?>
            <div class='alerta-exito'>
                <?php echo $_SESSION['completado'] ?>
            </div>
        <?php elseif (isset($_SESSION['errores']['general'])) : ?>
            <div class='alerta-fallo'>
                <?php echo $_SESSION['errores']['general'] ?>
            </div>
        <?php endif; ?>
        <form action="registro.php" method="POST">
            <label for="user">Usuario</label>
            <input type="text" name="user">
            <label for="email">Correo</label>
            <input type="email" name="email">
            <label for="password">Contraseña</label>
            <input type="password" name="password">
            <input type="submit" value="Registrar">
            <a href="index.php">Iniciar Sesion</a>
        </form>
    </div>
    <!-- FIN FORMULARIO DE REGISTRO -->
<?php elseif (!isset($_SESSION)) : ?>
    <!-- INICIO FORMULARIO LOGIN -->
    <div class="formulario">
        <h1>Inicio de Sesion</h1>
        <form action="inicio.php" method="POST">
            <label for="user">Usuario</label>
            <input type="text" name="user">
            <label for="password">Contraseña</label>
            <input type="password" name="password">
            <input type="submit" value="Iniciar Session">
            <a href="index.php?registro">Crear cuenta </a>
        </form>
    </div>
    <!-- FIN FORMULARIO LOGIN -->
<?php endif; ?>