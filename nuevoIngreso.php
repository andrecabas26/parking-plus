<?php
$nombrePagina = "Nuevo Ingreso";
include 'plantilla.php';
include 'header.php';
include 'conexionbasedatos.php';

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {

  // Capturar datos del formulario
  $tipoVehiculo = $_POST["tipoVehiculo"];
  $marca = $_POST["marca"];
  $color = $_POST["color"];
  $placa = $_POST["placa"];
  $observaciones = $_POST["observaciones"];

  // Armar la consulta SQL para la inserción
  $insertar = "INSERT INTO vehiculos (tipoVehiculo, marca, color, placa, observaciones)
  VALUES ('$tipoVehiculo', '$marca', '$color', '$placa', '$observaciones') ";

  // Ejecutar la consulta
  if($conexion->query($insertar) === TRUE) {
    // Redirigir al archivo exito.php despues de la inserción en la BD
    header("Location: exito.php");
    exit;
  }
  else {
    echo "Error: " . $insertar . "<br>" . $conexion->error;
  }

  // Cerrar la conexión
  $conexion->close();
}
?>

<div class="contenedor-nuevo-ingreso">
  <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" id="nuevoIngreso" method="post">
    <h3>Información del Vehículo</h3>

    <div class="control-form">
      <label>Tipo Vehículo</label><br/>
      <select name="tipoVehiculo">
        <option value="carro">Carro</option>
        <option value="moto">Moto</option>
        <option value="otro">Otro</option>
      </select>
    </div>
    <div class="control-form">
      <label>Marca:</label>
      <input type="text" id="marca" name="marca" />
    </div>
    <div class="control-form">
      <label>Color:</label>
      <input type="text" id="color" name="color" />
    </div>
    <div class="control-form">
      <label>Placa:</label>
      <input type="text" id="placa" name="placa" />
    </div>
    <div class="control-form">
      <label>Observaciones:</label>
      <input type="text" id="observaciones" name="observaciones" />
    </div>
    <button class="botonNuevoVehiculo" type="submit">Ingresar vehiculo</button>
  </form>
</div>

<?php include 'footer.php'; ?>