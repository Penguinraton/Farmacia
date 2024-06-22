<?php

include "sesion.php";

$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];
$permisos = $_POST["permisos"];


$nuevasesion = new Sesion;
$isesion = $nuevasesion->crearUsuario($usuario, $contraseña, $permisos);