<?php
include "conexion.php";


$nuevoincio = new Conexion;
$iconexion = $nuevoincio->establecerConexion(); // establecer conexion //

function crearUsuario()
{
    echo "funciona";
};

function iniciarSesion($usuario, $contrasena, $iconexion)
{
    $usuario = $_POST['usuario'];
    $contrasena = $_POST['contrasena']; // obtener usuario y contraseña del login //
    $_SESSION['usuario'] = $usuario;  // la sesion tendra el nombre del usuario //


    $consulta = mysqli_query($iconexion, "SELECT * FROM login Where usuario = '$usuario' and contrasena = '$contrasena'"); // validar que existe ese usuario y coincide con la contraseña //

    // Para redireccionar en caso que la contraseña este mal  //
    $error = "error";
    $url_anterior = $_SERVER['HTTP_REFERER'];
    $url_redireccion = $url_anterior . '?' . http_build_query(array('error' => $error));
    // // 


    // el usuario y la contraseña coinciden se crea un inicio de sesion //
    $nr = mysqli_num_rows($query);

    if ($nr == 1) {
        session_start();
        $_SESSION['usuario'] = $nombre;
        header("location: registrofuncionario.php");
    }

    // sino redirecciona al url anterior //
    else {
        header('Location: ' . $url_redireccion);
    }
};

