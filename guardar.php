<?php
require_once 'conexion.php';
$us=null;
$nom=null;
$ps=null;
$apell=null;
$nac=null;
$dom=null;
$matri=null;
$esc=null;
$motv=null;


class users
{
    public function guarda()
    {
        $us=$_POST['user'];
        $ps=$_POST['psw'];
        $nom=$_POST['nombre'];
        $apell=$_POST['apellidos'];
        $nac=$_POST['bd'];
        $dom=$_POST['domicilio'];
        $matri=$_POST['matricula'];
        $esc=$_POST['escuela'];
        $motv=$_POST['motivos'];

        $conexion=new conexion();
        $query = $conexion->prepare('INSERT INTO users (name, apellidos, birthday, domicilio, matricula, user, psw, escuela, motivos) VALUES (:nom, :apellidos, :nacim, :domicilio, :matricula, :usuario, :clave, :escuela, :motivos)');
        

        $query->bindParam(':nom',$nom);
        $query->bindParam(':apellidos',$apell);
        $query->bindParam(':nacim',$nac);
        $query->bindParam(':domicilio',$dom);
        $query->bindParam(':matricula',$matri);
        $query->bindParam(':usuario',$us);
        $query->bindParam(':clave',$ps);
        $query->bindParam(':escuela',$esc);
        $query->bindParam(':motivos',$motv);
        
        $query->execute();

        echo "REGISTRO GUARDADO";


    }
}
$conexion=null;

$eluser=new users($nom,$apell,$nac,$dom,$matri,$us,$ps,$esc,$motv);
$eluser->guarda();
echo"<br><a href='index.php'>INGRESAR</a>"

?>