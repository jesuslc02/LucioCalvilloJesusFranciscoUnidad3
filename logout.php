<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>logout</title>
    <style type="text/css">
        *
        {
            text-align: center;
        }
    </style>
</head>

<body>
    <?php
    session_start();
    session_destroy();
    echo "SESION CERRADA DE MANERA CORRECTA";
    echo "<br><a href='index.php'>ingresar</a>";
    ?>
</body>

</html>