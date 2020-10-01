<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <title>Test Infra-PHP</title>
  <link rel="stylesheet" type="text/css" href="css/estilo.css">
</head>
<body>
  <?php require_once 'includes/conexion.php'; ?>
  <div class="info-head">
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