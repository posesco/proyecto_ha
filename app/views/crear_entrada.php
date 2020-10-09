<?php if (isset($_SESSION['usuario'])) : ?>
    <!-- INICIO DE BARRA HORIZONTAL -->
    <nav id="menu">
        <ul>
            <li>
                <?php echo 'Bienvenido Usuario: ' . $_SESSION['usuario']['usuario'] ?>
            </li>
            <li>
                <a href="views/crear_entrada.php">Crear Entrada</a>
            </li>
            <li>
                <a href="controllers/borrar_entrada.php">Borrar Entrada</a>
            </li>
            <li>
                <a href="views/modificar_entrada.php">Modificar Entrada</a>
            </li>
            <li>
                <a href="controllers/cerrar_sesion.php">Cerrar Sesion</a>
            </li>
        </ul>
    </nav>
    <!-- FIN DE BARRA HORIZONTAL -->
    <!-- INICIO DE CUERPO -->
    <div class="principal">
        <h1>Crear Entradas</h1>
        <p>
        Crea tus entradas para el blog
        </p>
        <?php
        // el parametro db viene de conexion.php
        $entradas = conseguirEntradas($db, true);
        if (!empty($entradas)) :
            while ($entrada = mysqli_fetch_assoc($entradas)) :
        ?>
                <article class="entrada">
                    <a href="entrada.php?id=<?= $entrada['id'] ?>">
                        <h2><?= $entrada['titulo'] ?></h2>
                    </a>
                    <span class="fecha"><?= 'Autor: ' . $entrada['autor'] . ' | ' . $entrada['fecha'] ?></span>
                    <p>
                        <p>
                            <img src='<?= $entrada['imagen'] ?>' width='150px' align="bottom">

                        </p>
                        <?= $entrada['descripcion'] ?>
                    </p>
                </article>
        <?php
            endwhile;
        endif;
        ?>
        <div id="ver-todas">
            <a href="entradas.php">
                <h2>Ver todas las entradas</h2>
            </a>
        </div>
    </div>
    <!-- FIN DE CUERPO -->
<?php endif; ?>