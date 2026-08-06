<?php

//incluir el archivo de conexion

include("conection.php");

//declaramos las variables

$tipo_documento = $_POST["tipo_documento"];
$numero_documento = $_POST["numero_documento"];
$nombres_completos = $_POST["nombres_completos"];
$correo_electronico = $_POST["correo_electronico"];
$usuario = $_POST["usuario"];
$password = $_POST["password"];
$perfil = $_POST["perfil"];

echo "$tipo_documento";
echo "$numero_documento";
echo "$nombres_completos";
echo "$correo_electronico";
echo "$usuario";
echo "$password";
echo "$perfil";


?>