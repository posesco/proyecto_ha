<?php
require_once 'includes/mysql.php';
require_once 'includes/redis.php';
require_once 'includes/mongo.php';
require_once 'includes/helpers.php';
?>
<div class="info-cabeza">
    <h1>Informacion del Sistema</h1>
    <table border="0">
        <tr>
            <td>
                <?php
                // CABECERA INFO DEL SISTEMA
                echo '<strong>Ip del Servidor: </strong>' . $_SERVER['SERVER_ADDR'] . ':' . $_SERVER['SERVER_PORT'];
                echo '<br>';
                echo '<strong>Ip del Cliente: </strong>' . $_SERVER['REMOTE_ADDR'] . ':' . $_SERVER['REMOTE_PORT'];
                echo '<br>';
                echo '<strong>Información del Host Base de Datos: </strong>' . mysqli_get_host_info($db);
                echo '<br>';
                echo '<strong>Version DB SQL: </strong>' . mysqli_get_server_info($db);
                ?>
            </td>
            <td></td>
            <td>
                <?php
                echo '<strong>Version Server Redis: </strong>' . $v_redis["redis_version"];
                echo '<br>';
                echo '<strong>Version Cliente PhpRedis: </strong>' . phpversion('redis');
                echo '<br>';
                echo '<strong>Servidor SFTP: </strong>';
                echo '<br>';
                echo '<strong>Almacen de archivos: </strong>';
                ?>
            </td>
            <td></td>
            <td>
                <?php
                echo '<strong>Version Server Mongo: </strong>';
                echo '<br>';
                echo '<strong>Version Cliente Mongo: </strong>';
                echo '<br>';
                echo '<strong>Estado Redis: </strong>';
                echo '<br>';
                echo '<strong>Estado Mongo: </strong>';
                ?>
            </td>
        </tr>
    </table>
</div>