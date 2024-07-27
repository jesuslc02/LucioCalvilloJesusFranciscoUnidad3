<?php
session_start();
require_once 'conexion.php';

if (isset($_POST['validar'])) {
    $us=$_POST['user'];
    $ps=$_POST['psw'];

    $conexion= new conexion();

    $query=$conexion->prepare('SELECT * from users WHERE USER=:usuario AND PSW=:clave');
    $query->bindParam(':usuario',$us);
    $query->bindParam(':clave',$ps);
    $query->execute();

    $count=$query->rowCount();

    if ($count)
    {
        $_SESSION['usuario']=$us;
        header("Location:iniciooficial.php");
    }
    else
    {
        echo"verificar las credenciales de acceso";
        echo"<br> <a href='index.php'>REGRESAR</a>";
    }
}
?>