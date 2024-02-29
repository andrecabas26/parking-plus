<?php
$nombrePagina = "Parqueados";
include 'plantilla.php';
include 'header.php';

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
include 'conexionbasedatos.php';

// Consultar los vehiculos parqueados
$vehiculosParqueados = "SELECT * FROM vehiculos WHERE estado = 'parqueado'";


?>

<h3>Vehiculos Parqueados</h3>
<h3 style="padding-left: 2rem;">Vehiculos Parqueados</h3>
<div class="contenedor-listado-parqueados">

    <table class="tabla">