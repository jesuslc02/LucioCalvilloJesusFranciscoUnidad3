<?php
require_once 'conexion.php';

class Users
{
    public function eliminar()
    {
        try {
            if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['user'])) {
                
                $us = $_POST['user']; 

               
                if (empty($us)) {
                    throw new Exception('El campo de usuario está vacío.');
                }

               
                $conexion = new Conexion();

               
                $checkQuery = $conexion->prepare('SELECT COUNT(*) FROM users WHERE user = :usuario');
                $checkQuery->bindParam(':usuario', $us);
                $checkQuery->execute();
                $count = $checkQuery->fetchColumn();

                if ($count == 0) {
                    echo "EL USUARIO NO EXISTE";
                    return;
                }

                
                $query = $conexion->prepare('DELETE FROM users WHERE user = :usuario');

                
                $query->bindParam(':usuario', $us);

               
                $query->execute();

               
                if ($query->rowCount() > 0) {
                    echo "USUARIO ELIMINADO";
                } else {
                    echo "NO SE REALIZÓ CAMBIO";
                }
            } else {
                echo "EL FORMULARIO NO HA SIDO ENVIADO O EL CAMPO 'USER' NO ESTÁ DEFINIDO.";
            }
        } catch (PDOException $e) {
            echo "ERROR DE BASE DE DATOS: " . $e->getMessage();
        } catch (Exception $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }
}


$eluser = new Users();
$eluser->eliminar();


$conexion = null;

echo "<br><a href='index.php'>INGRESAR</a>";
?>

