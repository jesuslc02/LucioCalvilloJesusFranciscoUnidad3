<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>conexion</title>
</head>
<body>
    <?php
        class conexion extends PDO
        {
            private $tipo_de_base='mysql';
            private $host='localhost';
            private $nombre_de_base='appweb';
            private $usuario='root';
            private $contrasena='';
            public function __construct()
            {
                try {
                    parent::__construct($this->tipo_de_base.':host='.$this->host.';dbname='.$this->nombre_de_base,$this->usuario,$this->contrasena);
                } catch (PDOxception $e) {
                    echo 'HA SURGIDO UN ERROR Y NO SE PUEDE CONECTAR A LA BASE DE DATOS DETALLE:'.$e->getMessage();
                }
            }
        }


     ?>
</body>
</html>