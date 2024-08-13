<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/loginstyle.css">
</head>
<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <img src="img/utc.jpg" alt="UTC" class="img-fluid mb-4">
                <form action="new_session.php " method="post">
                    <fieldset>
                        <legend>INICIO SESIÓN</legend>
                        <div class="form-group">
                            <label for="usuario" >USUARIO</label>
                            <input type="text" id="usuario" name="user" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <label for="psswd" required>CONTRASEÑA</label>
                            <input type="password" id="psw" name="psw" class="form-control" required>
                        </div>
                        <div class="form-group">
                            <button type="submit" name=validar>INICIAR SESION</button>
                        </div>
                        <div class="form-group text-center">
                            <button type="button" onclick="location.href='registro.php';" >Registrarse</button>
                        </div>
                    </fieldset>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
    
