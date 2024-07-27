<?php
if (isset($_POST['submit'])) {
    $targetDir = "uploads/";
    
    // Crear el directorio si no existe
    if (!file_exists($targetDir)) {
        mkdir($targetDir, 0777, true);
    }

    $targetFile = $targetDir . basename($_FILES["file"]["name"]);
    $uploadOk = 1;
    $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

    // Comprobar si el archivo ya existe
    if (file_exists($targetFile)) {
        echo "El archivo ya existe.";
        $uploadOk = 0;
    }

    // Comprobar el tamaño del archivo (limite de 5MB)
    if ($_FILES["file"]["size"] > 5000000) {
        echo "El archivo es demasiado grande.";
        $uploadOk = 0;
    }

    // Solo permitir ciertos formatos de archivo
    $allowedTypes = array("jpg", "png", "jpeg", "gif", "pdf");
    if (!in_array($fileType, $allowedTypes)) {
        echo "Solo se permiten archivos JPG, JPEG, PNG, GIF y PDF.";
        $uploadOk = 0;
    }

    // Verificar si $uploadOk está en 0 por un error
    if ($uploadOk == 0) {
        echo "El archivo no se ha subido.";
    } else {
        if (move_uploaded_file($_FILES["file"]["tmp_name"], $targetFile)) {
            echo "El archivo ". htmlspecialchars(basename($_FILES["file"]["name"])) . " ha sido subido.";
        } else {
            echo "Hubo un error al subir tu archivo.";
        }
    }
    echo"<br><a href='iniciooficial.php'>REGRESAR</a>";
}

?>
