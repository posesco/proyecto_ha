<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>Test Infra-PHP</title>
    <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>

<body>
    <?php require_once 'includes/mysql.php'; ?>
    <div class="info-cabeza">
        <h1>Informacion del Sistema</h1>
        <table border="0">
            <tr>
                <td>
                    <?php
                    // Variables de servidor
                    echo 'Ip del Servidor: ' . $_SERVER['SERVER_ADDR'];
                    echo '<br>';
                    echo 'Puerto del Servidor: ' . $_SERVER['SERVER_PORT'];
                    echo '<br>';
                    echo "Información de conexion DB: " . mysqli_get_host_info($db);
                    echo '<br>';
                    echo "Version DB SQL: " . mysqli_get_server_info($db);
                    ?>
                </td>
                <td>
                    <?php
                    // Variables de servidor
                    echo 'Almacenamiento SFTP: XXXXXX ';
                    echo '<br>';
                    echo 'Conexion Redis: XXXXXX';
                    echo '<br>';
                    echo 'Otro dato: XXXXXX';
                    echo '<br>';
                    echo 'Otro mas: XXXXXX';
                    ?>
                </td>
            </tr>
        </table>

    </div>
    <!-- FIN DE BARRA HORIZONTAL -->
    <nav id="menu">
        <ul>
            <li>
                <a href="contacto.php">Cerrar Sesion</a>
            </li>
            <li>
                <a href="sobremi.php">Borrar Entrada</a>
            </li>
            <li>
                <a href="contacto.php">Modificar Entrada</a>
            </li>
            <li>
                <a href="index.php">Crear Entrada</a>
            </li>
        </ul>
    </nav>
    <!-- FIN DE BARRA HORIZONTAL -->
    <!-- INICIO DE CUERPO -->
    <div class="principal">
        <h1>Todas las entradas</h1>
        <article class="entrada">
            <a href="">
                <h2>Titulo de la Entrada 1</h2>
            </a>
            <span class="fecha">Autor | Compania | Fecha</span>
            <p>Contenido de la entrada
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
            </p>
        </article>
        <article class="entrada">
            <a href="">
                <h2>Titulo de la Entrada 2</h2>
            </a>
            <span class="fecha">Autor | Compania | Fecha</span>
            <p>Contenido de la entrada
                Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words, consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33 of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
            </p>
        </article>
    </div>
    <!-- FIN DE CUERPO -->
    <!-- INICIO FORMULARIO LOGIN -->
    <div class="formulario">
        <h1>Inicio de Sesion</h1>
        <form action="../controllers/login.php" method="POST">
            <label for="user">Usuario</label>
            <input type="text" name="user" placeholder="pepito_perez">
            <label for="password">Contraseña</label>
            <input type="password" name="password" placeholder="*********">
            <input type="submit" value="Iniciar Session">
            <a href="registro.php">Crear cuenta </a>
        </form>
    </div>
    <!-- FIN FORMULARIO LOGIN -->

    <!-- INICIO FORMULARIO DE REGISTRO -->
    <div class="formulario">
        <h1>Formulario de Registro</h1>
        <form action="../controllers/registro.php" method="POST">
            <label for="user">Usuario</label>
            <input type="text" name="user" placeholder="pepito_perez">
            <label for="email">Correo</label>
            <input type="email" name="email" placeholder="correo@correo.com">
            <label for="password">Contraseña</label>
            <input type="password" name="password" placeholder="*********">
            <input type="submit" value="Registrar">
            <a href="login.php">Ir a Inicio de Sesion</a>
        </form>
    </div>
    <!-- FIN FORMULARIO DE REGISTRO -->
</body>

</html>