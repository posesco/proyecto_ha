<?php if (isset($_SESSION['usuario'])) : ?>
    <?php require_once 'menu.php'; ?>
    <!-- INICIO DE CUERPO -->
    <div class="principal">
        <h1>Datos Redis</h1>
        <?php
        echo "Estado del Servidor: " . $redis->ping();
        echo '<br>';
        $count = $redis->dbSize();
        echo "Sesiones Activas en Redis:  $count (llaves)";
        ?>
    </div>
    <!-- FIN DE CUERPO -->
<?php endif; ?>