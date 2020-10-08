<?php
$servidor = '192.168.20.5';
$usuario = getenv('MYSQL_USER');
$password = getenv('MYSQL_PASSWORD');
$basededatos = getenv('MYSQL_DATABASE');
$db = mysqli_connect($servidor, $usuario, $password, $basededatos);
if (!$db) {
    echo "Error: No se pudo conectar a MySQL.";
    echo "errno de depuración: " . mysqli_connect_errno();
    echo "error de depuración: " . mysqli_connect_error();
    exit;
}
// Incluye la session
// Se crea sesion para evitar enviar parametros GET y verificar los datos de registro
// if (!isset($_SESSION)){
//     session_start();
// }
?>