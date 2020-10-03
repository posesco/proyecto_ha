<?php if (isset($_SESSION)) : ?>
    <!-- INICIO DE BARRA HORIZONTAL -->
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
<?php endif; ?>