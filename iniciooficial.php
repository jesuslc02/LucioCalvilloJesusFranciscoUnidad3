<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Universidad - Carreras</title>
    <link rel="stylesheet" href="css/iniciooficial.css">
</head>
<body>
<header class="university-header">
    <img src="img/utc.jpg" alt="Logo de la Universidad" class="logo">
    <h1>UNIVERSIDAD TECNOLOGICA DE COAHUILA</h1>
</header>

<section class="user-info">
    <h3>BIENVENID@</h3>
    <?php
    session_start();
    echo $_SESSION['usuario'];
    ?>
    <div>
        <a href="logout.php">CERRAR SESION</a>
        <a href="update.php">ACTUALIZAR CREDENCIALES</a>
        <a href="baja.php">ELIMINAR USUARIO</a>
        <br><a href="subirarchivos.php">SUBE TUS ARCHIVOS</a>
        <a href="archivos.php">MIS ARCHIVOS</a>
        <a href="borrararchivos.php">BORRAR ARCHIVOS</a>
    </div>
</section>

<div class="header">
    <h1>Carreras</h1>
</div>

<div class="carreras-container">
    <div class="carrera">
        <img src="img/MK.jpg" alt="Imagen de Innovación de Negocios y Marketing" class="rounded">
        <h3>INNOVACION DE NEGOCIOS Y MARKETING</h3>
    </div>
    <div class="carrera">
        <img src="img/LOGISTCA.jpg" alt="Imagen de Diseño y Gestión de Redes Logísticas">
        <h3>DISEÑO Y GESTION DE REDES LOGISTICAS</h3>
    </div>
    <div class="carrera">
        <img src="img/BIO.jpg" alt="Imagen de Biotecnologías">
        <h3>BIOTECNOLOGIAS</h3>
    </div>
    <div class="carrera">
        <img src="img/CONFIABILIDAD.jpg" alt="Imagen de Confiabilidad de Planta">
        <h3>CONFIABILIDAD DE PLANTA</h3>
    </div>
    <div class="carrera">
        <img src="img/DESARROLLO.jpg" alt="Imagen de Desarrollo y Gestión de Software">
        <h3>DESARROLLO Y GESTION DE SOFTWARE</h3>
    </div>
    <div class="carrera">
        <img src="img/ENTORNOS.jpg" alt="Imagen de Entornos Virtuales y Negocios Digitales">
        <h3>ENTORNOS VIRTUALES Y NEGOCIOS DIGITALES</h3>
    </div>
    <div class="carrera">
        <img src="img/ENERGIAS.jpg" alt="Imagen de Energías Renovables">
        <h3>ENERGIAS RENOVABLES</h3>
    </div>
    <div class="carrera">
        <img src="img/MECATRONICA.jpg" alt="Imagen de Mecatrónica">
        <h3>MECATRONICA</h3>
    </div>
    <div class="carrera">
        <img src="img/METAL.jpg" alt="Imagen de Metal Mecánica">
        <h3>METAL MECANICA</h3>
    </div>
    <div class="carrera">
        <img src="img/NANO.jpg" alt="Imagen de Nanotecnología">
        <h3>NANOTECNOLOGIA</h3>
    </div>
    <div class="carrera">
        <img src="img/PROCESOS.jpg" alt="Imagen de Procesos y Operaciones Industriales">
        <h3>PROCESOS Y OPERCAIONES INDUSTRIALES</h3>
    </div>
    <div class="carrera">
        <img src="img/REDES.jpg" alt="Imagen de Redes Inteligentes y Ciberseguridad">
        <h3>REDES INTELIGENTES Y CIBERSEGURIDAD</h3>
    </div>
    <div class="carrera">
        <img src="img/SEGURIDADAMBIENTAL.jpg" alt="Imagen de Seguridad Ambiental Sustentable">
        <h3>SEGURIDAD AMBIENTAL SUSTENTABLE</h3>
    </div>
</div>
</body>
</html>
