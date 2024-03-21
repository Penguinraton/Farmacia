<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="css5.css">
</head>

<body>
    <center>
    <div class="container">
        <header class="text-center mt-5">
            <h1 class="mb-4">Formulario</h1>
            <p class="lead">Solicitud de pedido</p>
        </header>
        <form class="form-signin mt-4" action="registrob.php" method="POST">
            <div class="contenedor">
                <div class="mb-3">
                    <label for="nombre" class="form-label">Nombre</label>
                    <input type="text" class="form-control" name="nombre" id="input" placeholder="Ingresa el nombre del funcionario">
                </div>
                <div class="mb-3">
                    <label for="apellido" class="form-label">Apellido</label>
                    <input type="text" class="form-control" name="apellido" id="input">
                </div>
                <div class="mb-3">
                    <label for="cedula" class="form-label">Cedula</label>
                    <input type="number" class="form-control" name="cedula" id="input">
                </div>
                <div class="mb-3">
                    <label for="telefono" class="form-label">Telefono</label>
                    <input type="number" class="form-control" name="telefono" id="input">
                </div>
                <div class="mb-3">
                    <label for="correo" class="form-label">Correo</label>
                    <input type="email" class="form-control" name="correo" id="input">
                </div>
                <div class="mb-3">
                    <label for="departamento" class="form-label">Departamento</label>
                    <input type="number" class="form-control" name="dept" id="input">
                </div>
                <div class="mb-3">
                    <label for="tipo_beneficiario" class="form-label">Tipo de beneficiario</label>
                    <input type="text" class="form-control" name="tipo_beneficiario" id="input">
                </div>
            </div>

            <button> enviar </button>
        </form>

</center>
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
            </div>
        </footer>
        <script src="./js/bootstrap.bundle.min.js"></script>
</body>

</html>