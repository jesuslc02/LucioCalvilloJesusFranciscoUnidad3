<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>REGISTRO</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="CSS/registerstyle.css">
</head>
<body>
    <div class=container>
        <div class="row justify-content-center mt-3">
            <div class="col-xl-4">
                <img src="img/utc.jpg" alt="UTC" class="img-fluid mb-2">
                <form action="guardar.php" method=post>
                    <fieldset>
                        <legend>DATOS PERSONALES</legend>
                        <div class="form-group">
                            <label for="nombre">Nombre/s</label>
                            <input type="text" name=nombre class="form-control">
                            <label for="apellido">Apellidos</label>
                            <input type="text" name=apellidos class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="bd">Fecha de nacimiento</label>
                            <input type="date" name=bd class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="domicilio">Domicilio</label>
                            <input type="text" name=domicilio class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="matricula">Matricula</label>
                            <input type="text" name=matricula class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="user">USUARIO</label>
                            <input type="text" name=user class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="psw">CONTRASEÑA</label>
                            <input type="password" name=psw class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="escuela">Escuela de Proveniencia</label>
                            <select name="escuela" class="form-control" id='escuela'>
                                <option value="CBTIS97">CBTIS 97</option>
                                <option value="CONALEP">CONALEP</option>
                                <option value="CETIS 48">CETIS 48</option>
                                <option value="CBITS 235">CBTIS 235</option>
                                <option value="CENTRO DE EDUCACION FORESTAL">CENTRO DE EDUCACION FORESTAL</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="motivos">Motivos por los cuales eligió esta institución</label>
                            <textarea name="motivos" class="form-control" rows="4"></textarea>
                        </div>
                    </fieldset>
                    <button type="submit" name="validar" >Registrarse</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>