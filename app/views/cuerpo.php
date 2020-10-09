<?php if (isset($_SESSION['usuario'])) : ?>
    <?php require_once 'menu.php';?>
    <!-- INICIO DE CUERPO -->
    <div class="principal">
        <h1>Ultimas Entradas</h1>
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