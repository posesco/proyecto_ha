<?php
if (isset($_POST)) {
     // Cargar conexion a DB
     require_once '../includes/mysql.php';
     $titulo         = isset($_POST['titulo']) ? mysqli_real_escape_string ($db, $_POST['titulo']) : false ;
     $descripcion    = isset($_POST['descripcion']) ? mysqli_real_escape_string ($db, $_POST['descripcion']) : false ;
     $archivo        = $_FILES['archivo'];
     $nombre         = $archivo['name'];    
     $tipo           = $archivo['type'];
     $directorio     = '/img';

     /// Array de errores
    $errores = [];
    // Verificacion de datos antes de enviar a la base de datos
    if (empty($titulo)) {
        $errores['titulo'] = 'Debes poner un titulo';
    }
    if (empty($descripcion)) {
        $errores['descripcion'] = 'La entrada no puede estar vacia';
    }
    if ($tipo == "image/jpg" || $tipo == "image/jpeg" || $tipo == "image/png" || $tipo == "image/gif" || $tipo == "image/svg") {
        // Crea carpeta si no existe
        if (is_dir('img')) {
            mkdir('img', 0777);
        }
        var_dump(move_uploaded_file($archivo['tmp_name'], 'img/'.$nombre));
        die();

        move_uploaded_file($archivo['tmp_name'], 'img/'.$nombre);
    }else{
        $errores['archivo'] = 'Solo se permiten imagenes de extensiones jpg, jpeg, png, gif o svg';
    }
    if (count($errores) == 0 ) {
        $id = $_SESSION['usuario']['id'];
		if(isset($_GET['modificar_entrada'])){
			$entrada_id = $_GET['modificar_entrada'];
			$sql = "UPDATE entradas SET titulo='$titulo', descripcion='$descripcion'
                    WHERE id = $entrada_id AND usuario_id = $id";

		}else{
            $sql = "INSERT INTO entradas (usuario_id, titulo, descripcion, imagen) VALUES ('$id', '$titulo', $descripcion, 'images/.$nombre')";
		}
    
        $entrada = mysqli_query($db, $sql);
        if ($entrada) {
            $_SESSION['completado'] = "Se creo la nueva entrada de titulo: $titulo";
        }else {
            $_SESSION['errores']['general'] = 'No fue posible crear la entrada';
        }
    }else {
        // Devolvemos al formulario para corregir los datos 
        $_SESSION['errores'] = $errores;
    }
}
header('Location:index.php?crear_entrada');
    
?>