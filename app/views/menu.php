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
                <a href="index.php?borrar_entrada">Borrar</a>
            </li>
            <li>
                <a href="index.php?modificar_entrada">Modificar</a>
            </li>
            <li>
                <a href="index.php?actividad">Registro de Actividad (Mongo)</a>
            </li>
            <li>
                <a href="index.php?sesiones">Registro de Sesiones (Redis)</a>
            </li>
            <li>
                <a href="controllers/cerrar_sesion.php">Cerrar Sesion</a>
            </li
        </ul>
    </nav>
    <!-- FIN DE BARRA HORIZONTAL -->