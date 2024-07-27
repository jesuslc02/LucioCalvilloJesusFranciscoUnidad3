<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ELIMINAR CUENTA</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <link rel="stylesheet" href="css/registerstyle.css">
</head>
<body>
    <div class=container>
        <div class="row justify-content-center mt-3">
            <div class="col-xl-4">
                <img src="img/UTC.jpg" alt="UTC" class="img-fluid mb-2">
                <form action="eliminar.php" method=post>
                    <fieldset>
                        <div class="form-group">
                            <label for="user">USUARIO</label>
                            <input type="text" name=user class="form-control" required>
                        </div>
                    </fieldset>
                    <button type="submit" name="validar" >ELIMINAR</button>
                </form>
            </div>
        </div>
    </div>
</body>
</html>