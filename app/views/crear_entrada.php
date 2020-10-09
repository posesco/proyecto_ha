<?php if (isset($_SESSION['usuario'])) : ?>
    <?php require_once 'menu.php'; ?>
    <!-- INICIO DE CUERPO -->
    <div class="formulario">
        <h1>Crear Entradas</h1>
        <p>
        <h2>Crea tus entradas para el blog</h2>    
        </p>
        <!-- Muestra error de registro -->
        <form action="controllers/guardar_entradas.php" method="POST" enctype="multipart/form-data">
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'titulo') : ''; ?>
            <label for="titulo">Titulo de la Entrada</label>
            <input type="text" name="titulo">
            <br>
            <br>
            <?php echo isset($_SESSION['errores']) ? mostrarError($_SESSION['errores'], 'descripcion') : ''; ?>
            <label for="descripcion">Cuerpo de la entrada</label>
            <textarea name="descripcion" placeholder="Escribe tu entrada" cols="80" rows="15"></textarea>
            <label for="descripcion">Sube una imagen sobre tu post</label>
            <br>
            <input type="file" name="archivo">
            <br>
            <input type="submit" value="Crear entrada">
        </form>
        <?php borrarErrores(); ?>
    </div>
    <!-- FIN DE CUERPO -->
<?php endif; ?>