<?php


include "conexion.php";

class Sesion
{
    private $usuario;
    private $contraseña;
    private $permisos;


    public function prueba1($usuario, $contraseña)
    {
        $this->usuario = $usuario;
        $this->contraseña = $contraseña;
        echo "hola" . $this->usuario;
        echo "tu contraseña es" . $this->contraseña;
    }

    function crearUsuario($usuario, $contraseña, $permisos) 
    {
        $nuevousuario = new Conexion;
        $iconexion = $nuevousuario->establecerConexion();
        $this->usuario = $usuario;
        $this->contraseña = $contraseña;
        $this->permisos = $permisos;
        $sql = "INSERT INTO login (usuario, contraseña, permisos)
        Values ('$this->usuario', '$this->contraseña', '$this->permisos')";

        if (mysqli_query($iconexion, $sql)) 
        {
            echo "Nuevo beneficiario registrado";
        }        
        else 
        {
            echo "Error: ";
        }
    }

    public function verificarUsuario($usuario, $contraseña)
    {
        $nuevoincio = new Conexion;
        $iconexion = $nuevoincio->establecerConexion();
        $this->usuario = $usuario;
        $this->contraseña = $contraseña;

        $consulta = mysqli_query($iconexion, "SELECT * FROM login Where usuario = '$usuario' and contraseña = '$contraseña'"); // validar que existe ese usuario y coincide con la contraseña //

        // Para redireccionar en caso que la contraseña este mal  //
        $error = "error";
        $url_anterior = $_SERVER['HTTP_REFERER'];
        $url_redireccion = $url_anterior . '?' . http_build_query(array('error' => $error));
        // // 


        // el usuario y la contraseña coinciden se crea un inicio de sesion //
        $nr = mysqli_num_rows($consulta);

        if ($nr == 1) {
            session_start();
            $_SESSION['usuario'] = $usuario;
            header("location: registroF.php");
        }

        // sino redirecciona al url anterior //
        else {
            header('Location: ' . $url_redireccion);
        }
    }

    public function borrarUsuario()
    {
    }

    public function modificarUsuario(){

    }
}
