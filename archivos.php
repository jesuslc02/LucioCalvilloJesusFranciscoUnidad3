<?php
$dir = "uploads/";
$files = scandir($dir);

echo "<h2>Archivos Subidos:</h2>";
echo "<ul>";
foreach ($files as $file) {
    if ($file != "." && $file != "..") {
        echo "<li><a href='$dir$file' target='_blank'>$file</a></li>";
    }
}
echo "</ul>";
echo"<br><a href='iniciooficial.php'>REGRESAR</a>";
?>
