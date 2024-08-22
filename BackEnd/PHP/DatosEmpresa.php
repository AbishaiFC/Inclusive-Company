<?php
require_once 'DB.php'; 

$db = new DB();
$mysqli = $db->connect();


$nombre = $_POST['Nombre'];
$calle = $_POST['Calle'];
$numeroCalle = $_POST['NumeroCalle'];
$ciudad = $_POST['Ciudad'];
$estadoPais = $_POST['Estado'];
$pais = $_POST['Pais'];
$codigoPostal = $_POST['CodigoPostal'];
$telefono = $_POST['Telefono'];
$discapacidadesAdmitidas = $_POST['DiscapacidadesAdmitidas'];


$sql = "INSERT INTO empresa (Nombre, Telefono, Calle, NumeroCalle, Ciudad, EstadoPaís, Pais, CodigoPostal, DiscapacidadAdmitidas) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";
$stmt = $mysqli->prepare($sql);


if (!$stmt) {
    die("Error en la preparación de la consulta: " . $mysqli->error);
}

$stmt->bind_param("sssssssss", $nombre, $telefono, $calle, $numeroCalle, $ciudad, $estadoPais, $pais, $codigoPostal, $discapacidadesAdmitidas);


if ($stmt->execute()) {
    echo "Datos insertados correctamente";
} else {
    echo "Error al insertar los datos: " . $stmt->error;
}


$stmt->close();
$mysqli->close();
?>

