<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de Archivos</title>
    <link rel="stylesheet" href="css/archivos.css">
</head>
<body>
    <header class="university-header">
        <img src="img/utc.jpg" alt="Logo de la Universidad" class="logo">
        <h1>UNIVERSIDAD TECNOLOGICA DE COAHUILA</h1>
    </header>

    <div class="container">
        <h2>Subir un Archivo</h2>
        <form action="subida.php" method="post" enctype="multipart/form-data">
            <label for="file">Selecciona un archivo:</label>
            <input type="file" name="file" id="file" required>
            <button type="submit" name="submit">Subir Archivo</button>
        </form>
    </div>
</body>
</html>
