<?php
if (isset($_GET['delete'])) {
    $fileToDelete = $_GET['delete'];
    $filePath = "uploads/" . $fileToDelete;

    if (file_exists($filePath)) {
        unlink($filePath);
        echo "El archivo $fileToDelete ha sido eliminado.";
    } else {
        echo "El archivo no existe.";
    }
}
?>

<!-- Enlaza los archivos con la opción de eliminar -->
<?php
$dir = "uploads/";
$files = scandir($dir);

echo "<h2>Archivos Subidos:</h2>";
echo "<ul>";
foreach ($files as $file) {
    if ($file != "." && $file != "..") {
        echo "<li><a href='$dir$file' target='_blank'>$file</a> <a href='?delete=$file'>Eliminar</a></li>";
    }
}
echo "</ul>";
echo"<br><a href='iniciooficial.php'>REGRESAR</a>";
?>
