<?php
function mostrarError($errores, $campo){
    $alerta = '';
    if (isset($errores[$campo]) && !empty($campo)) {
        $alerta = "<div class='alerta-fallo'>".$errores[$campo]."</div>";
    }
    return $alerta;
}

// Limpia la variable errores para permitir el ingreso de nuevos datos
function borrarErrores(){
    $borrado = false;
    if(isset($_SESSION['errores'])){
        $_SESSION['errores'] = null;
        $borrado = true; 
    }
    if(isset($_SESSION['completado'])){
        $_SESSION['completado'] = null;
        $borrado = true;; 
    }
    return $borrado;
}

?>