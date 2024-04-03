<?php

// Realizar la conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "";
$basedatos = "parking_plus_db";

// Crear una nueva conexión
$conexion = new mysqli($servername, $username, $password, $basedatos);

// Verificar la conexión
if ($conexion->connect_error) {
    die("La conexión a la base de datos tuvo un error: " . $conexion->connect_error);
}