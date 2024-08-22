<?php
require_once 'DB.php'; 

$db = new DB();
$mysqli = $db->connect();

$nombre = $_POST['Nombre'];
$apellidoPaterno = $_POST['ApellidoPaterno'];
$apellidoMaterno = $_POST['ApellidoMaterno'];
$calle = $_POST['Calle'];
$ciudad = $_POST['Ciudad'];
$estadoPais = $_POST['EstadoPaís'];
$codigoPostal = $_POST['CodigoPostal'];
$telefonoCelular = $_POST['TelefonoCelular'];
$telefonoFijo = $_POST['Telefonofijo'];
$genero = $_POST['Genero'];

$sql = "INSERT INTO postulante (Nombre, ApellidoPaterno, ApellidoMaterno, Calle, Ciudad, EstadoPaís, CodigoPostal, TelefonoCelular, TelefonoFijo, Sexo) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);

$stmt->bind_param("ssssssssss", $nombre, $apellidoPaterno, $apellidoMaterno, $calle, $ciudad, $estadoPais, $codigoPostal, $telefonoCelular, $telefonoFijo, $genero);

if ($stmt->execute()) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar los datos: " . $stmt->error;
}

$stmt->close();
$mysqli->close();

?>
