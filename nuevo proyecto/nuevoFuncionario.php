<?php

include "funcionario.php";

$nombre = $_POST["nombre"];
$apellido = $_POST["apellido"];
$tipocedula = $_POST["tipocedula"];
$cedula = $_POST["cedula"];
$telefono = $_POST["telefono"];
$correo = $_POST["correo"];
$departamento = $_POST["departamento"];

$nuevofuncionario = new Funcionario;
$ifuncionario = $nuevofuncionario->registroFuncionario($nombre, $apellido, $tipocedula, $cedula, $telefono, $correo, $departamento);