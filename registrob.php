<?php

include 'conexion.php';
include 'entidades.php';

echo "hola";
$admin = new Conexion();
$iconexion = $admin->establecerConexion();

$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$cedula = $_POST['cedula'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];
$dept = $_POST['dept'];
$tipo_beneficiario = $_POST['tipo_beneficiario'];



$beneficiario = new Entidad($nombre, $apellido, $cedula, $telefono, $correo, $dept, $tipo_beneficiario);

$beneficiario->insertarBeneficiario($iconexion);

$beneficiario->consultarBeneficiario($iconexion);


?>