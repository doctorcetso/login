<?php

//incluir el archivo de conexion

include("conection.php");

//declaramos las variables

$tipo_documento = $_POST["tipo_documento"] ?? '';
$numero_documento = $_POST["numero_documento"] ?? '';
$nombres_completos = $_POST["nombres_completos"] ?? '';
$correo_electronico = $_POST["correo_electronico"] ?? '';
$usuario = $_POST["usuario"] ?? '';
$password = $_POST["password"] ?? '';
$perfil = $_POST["perfil"] ?? '';

//Sentencia sql para la insercion de datos
$insert = "INSERT INTO usuarios (tipo_documento, numero_documento, nombres_completos, correo_electronico, usuario, password, perfil) VALUES ('$tipo_documento', '$numero_documento', '$nombres_completos', '$correo_electronico', '$usuario', '$password', '$perfil')";

//verifica que los datos enviados se incerten correctamente
$result = mysqli_query($connection, $insert);

if ($result) {
    echo "Usuario registrado correctamente";
} else {
    echo "Error al registrar el usuario: ";
}

?>