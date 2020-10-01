<!-- INICIO FORMULARIO LOGIN -->
<!-- <div class="formulario">
    <h1>Inicio de Sesion</h1>
    <form action="../controllers/login.php" method="POST">
      <label for="user">Usuario</label>
      <input type="text" name="user" placeholder="pepito_perez">
      <label for="password">Contraseña</label>
      <input type="password" name="password" placeholder="*********">
      <input type="submit" value="Iniciar Session">
      <a href="registro.php">Crear cuenta </a>
    </form>
  </div> -->
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