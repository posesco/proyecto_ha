    <!-- INICIO DE BARRA HORIZONTAL -->
    <nav id="menu">
        <ul>
            <li>
                <?php echo 'Bienvenido Usuario: ' . $_SESSION['usuario']['usuario'] ?>
            </li>
            <li>
                <a href="index.php">Inicio</a>
            </li>
            <li>
                <a href="index.php?crear_entrada">Crear</a>
            </li>
            <li>
                <a href="index.php?eliminar_entrada">Borrar</a>
            </li>
            <li>
                <a href="index.php?sesiones">Registro de Sesiones (Redis)</a>
            </li>
            <li>
                <a href="views/info.php">Info PHP</a>
            </li>
            <li>
                <a href="http://localhost:9090">Jenkins</a>
            </li>
            <li>
                <a href="controllers/cerrar_sesion.php">Cerrar Sesion</a>
            </li
        </ul>
    </nav>
    <!-- FIN DE BARRA HORIZONTAL -->