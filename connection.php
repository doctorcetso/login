<?php
// Declarar variables de conexión a la base de datos
$host = 'localhost';
$dbname = 'login-angel';
$username = 'root';
$password = '';

// Ruta pra la conexion de la base de datos

$connection = mysqli_connect($host, $username, $password, $dbname);

// Condicion para validar la conexion a la base de datos

if ($connection) {
    echo "Conexion correcta a la base de datos";
} else {
    echo "Conexion fallida a la base de datos";
}
?>