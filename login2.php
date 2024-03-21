<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Control de Medicamentos - Inicio de Sesión</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="css6.css">
</head>

<body>
    <center>

        <div class="container">
            <header class="text-center mt-5">
                <h1 class="mb-4">Control de Medicamentos</h1>
                <p class="lead">Inicia sesión para acceder al sistema</p>
            </header>

            <form class="form-signin mt-4">
                <div class="contenedor">
                    <div class="mb-3">
                        <label for="usuario" class="form-label">Usuario</label>
                        <input type="text" class="form-control" id="usuario" placeholder="Ingresa tu usuario">
                    </div>
                    <div class="mb-3">
                        <label for="contrasena" class="form-label">Contraseña</label>
                        <input type="password" class="form-control" id="contrasena" placeholder="Ingresa tu contraseña" aria-describedby="avisoContrasena">
                        <div id="avisoContrasena" class="form-text">No compartas tu contraseña con nadie</div>
                    </div>

                    <div class="mb-3"><button type="submit" class="btn btn-primary btn-block">Ingresar</button></div>

                    <div class="mb-3">
                        <a href="/crear-usuario" class="btn btn-link">Crear nuevo usuario</a>
                    </div>

                </div>
            </form>
        </div>
</div>
        <script src="./js/bootstrap.bundle.min.js"></script>
        </center>

        
</body>




<footer>
  <div class="footer">
<div class="container-fluid bg-primary text-light py-3">
  <div class="container">
    <div class="row">
      <div class="col-md-6">
        <p class="mb-0">Copyright © 2024 - Todos los derechos reservados</p>
      </div>
      <div class="col-md-6 text-end">
        <a href="/manual" class="text-light">Manual</a>
        <a href="https://www.facebook.com/" target="_blank" class="text-light me-2"><i class="bi bi-facebook"></i></a>
        <a href="https://www.twitter.com/" target="_blank" class="text-light me-2"><i class="bi bi-twitter"></i></a>
        <a href="https://www.instagram.com/" target="_blank" class="text-light"><i class="bi bi-instagram"></i></a>
      </div>
    </div>
  </div>
</div>
</footer>
</body>


</html>