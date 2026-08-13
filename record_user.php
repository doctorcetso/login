<!doctype html>
<html lang="es">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <title>registro</title>
</head>

<body>

    <div class="container">
        <form action="enviar_user.php" method="post">
            <h1>formulario de registro usuarios</h1>

            <!-- formulario de registro de usuarios -->
            <div class="mb-3">
                <label for="exampleInputtipo_documento" class="form-label">tipo de documento</label>
                <select class="form-select" aria-label="Default select example" type="text" name="tipo_documento" required>
                    <option selected>selecione un tipo</option>
                    <option value="cc">cedula ciudadania</option>
                    <option value="ti">tarjeta identidad</option>
                    <option value="ce">cedula extranjeria</option>
                    <option value="rc">registro civil</option>
                    <option value="pt">proteccion temporal</option>
                </select>
            </div>
                    <div class="mb-3">
                <label for="exampleInputnumero_documento" class="form-label">numero de documento</label>
                <input type="number" name="numero_documento" class="form-control" id="exampleInputnumero_documento" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputnombres_completos" class="form-label">nombres completos</label>
                <input type="text" name="nombres_completos" class="form-control" id="exampleInputnombres_completos" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputcorreo_electronico" class="form-label">correo electronico</label>
                <input type="email" name="correo_electronico" class="form-control" id="exampleInputcorreo_electronico" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputusuario" class="form-label">usuario</label>
                <input type="text" name="usuario" class="form-control" id="exampleInputusuario" required>
            </div>
     
            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input type="password" name="password" class="form-control" id="exampleInputPassword1" required>
            </div>
            <div class="mb-3">
                <label for="exampleInputrol/perfil" class="form-label">crea tu perfil</label>
                <select class="form-select" aria-label="Default select example" type="text" name="perfil" required>
                    <option selected>selecione un perfil</option>
                    <option value="admin">perfil administrador</option>
                    <option value="client">perfil cliente</option>
                    <option value="vended">perfil vendedor</option>
                </select>
            </div>
            <button type="submit" class="btn btn-primary">registrar usuario</button>
            <a href="ini_ses_user.php">si ya tienes una cuenta creada , inicia sesion aqui..</a>
        </form>
    </div>

    <!-- termina formulario -->


    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
</body>

</html>