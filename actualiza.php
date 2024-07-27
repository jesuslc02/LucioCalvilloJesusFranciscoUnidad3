<?php
require_once 'conexion.php';

class Users
{
    public function actualizar()
    {
        try {
            $old_user = $_POST['old_user'];
            $new_user = $_POST['user']; 
            $ps = $_POST['psw']; 

            
            if (empty($old_user) || empty($new_user) || empty($ps)) {
                throw new Exception('Usuario actual, nuevo usuario o contraseña están vacíos.');
            }

            
            $conexion = new Conexion();

            
            $query = $conexion->prepare('UPDATE users SET user = :nuevo_usuario, psw = :clave WHERE user = :usuario_actual');

            
            $query->bindParam(':nuevo_usuario', $new_user);
            $query->bindParam(':clave', $ps);
            $query->bindParam(':usuario_actual', $old_user);

            
            $query->execute();

            
            if ($query->rowCount() > 0) {
                echo "REGISTRO ACTUALIZADO";
            } else {
                echo "NO SE ENCONTRÓ EL USUARIO ACTUAL O NO SE REALIZÓ CAMBIO";
            }
        } catch (PDOException $e) {
            echo "ERROR DE BASE DE DATOS: " . $e->getMessage();
        } catch (Exception $e) {
            echo "ERROR: " . $e->getMessage();
        }
    }
}


$eluser = new Users();
$eluser->actualizar();


$conexion = null;

echo "<br><a href='index.php'>INGRESAR</a>";
?>
