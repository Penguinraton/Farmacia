<?php

include "sesion.php";

$usuario = $_POST["usuario"];
$contraseña = $_POST["contraseña"];

$nuevasesion = new Sesion;
$isesion = $nuevasesion->verificarUsuario($usuario, $contraseña);
