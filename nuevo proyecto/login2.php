<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Control de Medicamentos - Inicio de Sesión</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="css5.css">
</head>

<body>
    <center>

        <div class="container">

            <header class="text-center mt-5">
                <p class="h1 mb-4">Control de Medicamentos</p>
                <img src="imagenes/logo2.png" alt="" class="img-fluid logo">
                <p class="lead mt-2">Inicia sesión para acceder al sistema</p>
            </header>

            <form class="form-signin mt-4" action="ingreso.php" method="POST">
                <div class="contenedor d-block">
                    <div class="form-floating">
                        <input type="text" name="usuario" class="form-control" id="usuario" placeholder="Usuario">
                        <label for="usuario" class="form-label">Usuario</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" name="contraseña" class="form-control" id="contraseña" aria-describedby="avisoContrasena" placeholder="Contraseña">
                        <label for="contraseña" class="form-label">Contraseña</label>
                        <div id="avisoContraseña" class="form-text">No compartas tu contraseña con nadie</div>
                    </div>

                    <div class="my-1"><button type="submit" class="btn btn-primary btn-block">Ingresar</button></div>


                </div>

                <div class="my-2">
                    <a href="crear-usuario.php" class="btn btn-link">Crear nuevo usuario</a>
                </div>

            </form>
        </div>
        </div>
        <script src="./js/bootstrap.bundle.min.js"></script>
    </center>


</body>




<footer class="d-flex flex-wrap justify-content-between align-items-center py-3 border-top">
        <div class="col-md-4 d-flex align-items-center">
            <span class="mb-md-0 text-body-secondary align-self-center">&copy; 2024 Company, Inc</span>
        </div>

        <ul class="nav col-md-4 justify-content-end list-unstyled d-flex">
            <li class="ms-3"><a class="text-body-secondary" href="#"><img src="imagenes/Facebook.svg" alt="Facebook Logo" width="24" height="24"></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><img src="imagenes/X_logo.svg" alt="X Logo" width="24" height="24"></a></li>
            <li class="ms-3"><a class="text-body-secondary" href="#"><img src="imagenes/Instagram.png" alt="Instagram Logo" width="24" height="24"></a></li>
        </ul>
    </footer>
</body>


</html>