<?php


class Entidad {
private $nombre;
private $apellido;
private $cedula;
private $telefono;
private $correo;
private $dept;
private $tipo_beneficiario;

    function __construct($nombre, $apellido, $cedula, $telefono, 
    $correo, $dept, $tipo_beneficiario) {

        $this->nombre             = $nombre;
        $this->apellido           = $apellido;
        $this->cedula             = $cedula;
        $this->telefono           = $telefono;
        $this->correo             = $correo;
        $this->dept               = $dept;
        $this->tipo_beneficiario  = $tipo_beneficiario;

    }

    function insertarBeneficiario($iconexion) 
    {

        $sql = "INSERT INTO beneficiario (nombre, apellido, cedula, telefono, correo, dept, tipo_beneficiario)
        Values ('$this->nombre', '$this->apellido', '$this->cedula', '$this->telefono', '$this->correo', '$this->dept', '$this->tipo_beneficiario')";

        if (mysqli_query($iconexion, $sql)) 
        {
            echo "Nuevo beneficiario registrado";
        }        
        else 
        {
            echo "Error: ";
        }
    }

    function consultarBeneficiario($iconexion)
    {
            $sql2 = "SELECT * fROM beneficiario";
            $obj  = mysqli_query($iconexion, $sql2);
            
            while($fila = mysqli_fetch_object($obj))
            {
                echo "hello: " . $fila->nombre;
                echo "hello: " . $fila->apellido;
            }
    }//consultarBeneficiario
            
           
}


    



?>