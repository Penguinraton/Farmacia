<?php


include "conexion.php";

class Funcionario
{
    private $nombre;
    private $apellido;
    private $tipocedula;
    private $cedula;
    private $telefono;
    private $correo;
    private $departamento;


    public function prueba1($nombre, $apellido, $tipocedula, $cedula, $telefono, $correo, $departamento)
    {
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->tipocedula = $tipocedula;
        $this->cedula = $cedula;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->departamento = $departamento;

        echo $this->nombre . $this->apellido . $this->tipocedula . $this->cedula . $this->telefono . $this->correo . $this->departamento;
    }


    public function registroFuncionario($nombre, $apellido, $tipocedula, $cedula, $telefono, $correo, $departamento)
    {
        $nuevoingreso = new Conexion;
        $iconexion = $nuevoingreso->establecerConexion();
        $this->nombre = $nombre;
        $this->apellido = $apellido;
        $this->tipocedula = $tipocedula;
        $this->cedula = $cedula;
        $this->telefono = $telefono;
        $this->correo = $correo;
        $this->departamento = $departamento;

        $sql = "INSERT INTO funcionarios (nombre, apellido, tipocedula, cedula, telefono, correo, departamento)
        Values ('$this->nombre', '$this->apellido', '$this->tipocedula', '$this->cedula', '$this->telefono', '$this->correo', '$this->departamento')";

        if (mysqli_query($iconexion, $sql)) {
            echo "Nuevo beneficiario registrado";
        } else {
            echo "Error: ";
        }
    }

    public function selectFuncionario()
    {
        $busqueda = new Conexion;
        $iconexion = $busqueda->establecerConexion();


        $consulta = "SELECT cedula, nombre, apellido FROM funcionarios";

        $resultado = $iconexion->query($consulta);

        if (!$resultado) {
            die("Error en la consulta: " . $iconexion->error);
        }

        // Generar el código HTML para el elemento select
        echo '<select name="personas[]" class="js-example-placeholder-multiple" multiple="multiple" style="width: 100%">';
        echo '<option value=""></option>';
        // Recorrer los resultados de la consulta y agregar cada opción

        while ($fila = $resultado->fetch_assoc()) {
            echo '<option value="' . $fila['tipocedula'] . '|' . $fila['cedula'] . '|' . $fila['nombre'] . '|' . $fila['apellido'] .'">' . $fila['tipocedula'] . ' - ' . $fila['cedula'] . ' ' . $fila['nombre'] . ' ' . $fila['apellido'] . ' ' . '</option>';
        }

        echo '</select>';

        // Cerrar la conexión a la base de datos
        $$iconexion->close();
    }
}
