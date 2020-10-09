<?php
require_once '../includes/helpers.php';
session_start();
if (isset($_SESSION['usuario'])){
    session_destroy();
}
borrarErrores();
header('Location:../index.php');
?>