<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Control de Medicamentos - Inicio de Sesión</title>
    <link rel="stylesheet" href="./css/bootstrap.min.css">
    <link rel="stylesheet" href="css5.css">
    <style>
        nav,
        .offcanvas {
            background-color: #0054a7;
        }
        /* Pantalla grande (filas) */


/* Pantalla pequeña (columnas) */
@media (max-width: 992px) {
  .nav-pills {
    flex-direction: column;
  }
  .cambio-fondo{
    background-color: white;
  }
  .nav-link{
    color: black;
  }
}
@media (min-width: 992px) {
  .nav-pills {
    flex-direction: row;
  }
  .cambio-fondo{
    background-color: #0054a7;

  }
  .nav-link{
    color: white;
  }
}
    </style>

<body>
    <!-- MENU START  -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <!-- NAV CONTAINER START -->
        <div class="container-fluid" style="padding-left: 1.5rem; padding-right:1rem;">
        <span class="fs-4 active" style="padding-bottom:5px; color:white;">Control de pedidos</span>

            <!-- NAV BUTTON  -->
            <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#menuLateral">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- OFFCANVAS MAIN CONTAINER START -->
            <section class="offcanvas offcanvas-start cambio-fondo" id="menuLateral" tabindex="-1">
                <div class="navbar h-100 cambio-fondo" style="padding: 0;">
                    <div class="d-flex flex-column flex-shrink-0 p-3 w-100 cambio-fondo" style="height: 100%;">
                        <div class="offcanvas-header" style="padding: 0;">
                        <img src="imagenes/escudo.png" alt="Lechería Logo" width="50" height="55" class="me-2">    
                        <span class="fs-4" style="padding-bottom:5px">Alcaldia de Lecheria</span>
                            <button class="btn-close" type="button" aria-label="Close" data-bs-dismiss="offcanvas"></button>
                        </div>

                        <hr class="d-lg-none">
                        <ul class="nav nav-pills mb-auto d-flex justify-content-center">
                            <li class="nav-item">
                                <a href="#" class="nav-link active" aria-current="page">
                                    <svg class="bi pe-none me-2 d-lg-none" width="16" height="16"> // imagen //
                                        <use xlink:href="#home" />
                                    </svg>
                                    Pagina principal
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <svg class="bi pe-none me-2 d-lg-none" width="16" height="16">
                                        <use xlink:href="#speedometer2" />
                                    </svg>
                                    Registro funcionario
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <svg class="bi pe-none me-2 d-lg-none" width="16" height="16">
                                        <use xlink:href="#table" />
                                    </svg>
                                    Solicitud medicamento
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    <svg class="bi pe-none me-2 d-lg-none" width="16" height="16">
                                        <use xlink:href="#grid" />
                                    </svg>
                                    Revisar solicitudes
                                </a>
                            </li>
                        </ul>
                        <hr class="d-lg-none">

                    </div>

                </div>

            </section>
            <!-- OFFCANVAS MAIN CONTAINER END  -->
        </div>
    </nav>



<center>


    <div class="col-md-6 m-3" style="padding-bottom: 10em;">

        <header class="text-center mt-4">
            <h1 class="mb-3">Formulario</h1>
            <p class="lead">Registro de beneficiario</p>
        </header>
        <form class="form-signin mt-4" action="nuevoFuncionario.php" method="POST">
            <div class="contenedor">
                <div class="row">
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="nombre" id="nombre">
                            <label for="nombre" class="form-label">Nombre</label>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="form-floating">
                            <input type="text" class="form-control" name="apellido" id="apellido">
                            <label for="apellido" class="form-label">Apellido</label>
                        </div>
                    </div>

                </div>

                <div class="row">

                    <div class="col-4">
                        <div class="form-floating">
                            <select class="form-select form select-lg mb-3" name="tipocedula">
                                <option value="V">V</option>
                                <option value="E">E</option>
                            </select>
                            <label for="cedula" class="form-label">Tipo</label>
                        </div>
                    </div>
                    <div class="col-8">
                        <div class="form-floating">
                            <input type="number" class="form-control" name="cedula" id="cedula">
                            <label for="cedula" class="form-label">Cedula</label>
                        </div>

                    </div>


                </div>
                <div class="form-floating">
                    <input type="number" class="form-control" name="telefono" id="telefono">
                    <label for="telefono" class="form-label">Telefono</label>
                </div>
                <div class="form-floating">
                    <input type="email" class="form-control" name="correo" id="correo">
                    <label for="correo" class="form-label">Correo</label>
                </div>

                
                   

                        <div class="form-floating">
                            <input type="number" class="form-control" name="departamento" id="departamento">
                            <label for="departamento" class="form-label">Departamento</label>
                        </div>
            
                


                <div><button type="submit" class="btn btn-primary btn-block">Ingresar</button></div>


            </div>


        </form>




    </div>


    </center>



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





    <script src="./js/bootstrap.min.js"></script>




</body>

</html>