<?php

include 'conexion.php';
include 'entidades.php';

echo "hola";
$admin = new Conexion();
$iconexion = $admin->establecerConexion();

$beneficiario = new Entidad();

$beneficiario->consultarBeneficiario($iconexion);

?>