<?php

require_once 'DB.php'; 


$db = new DB();


$mysqli = $db->connect();

$tipoDiscapacidad = $_POST['TipoDeDiscapacidad'];
$dependencias = $_POST['Dependencias'];
$nivelDeAfectacion = $_POST['NivelDeAfectacion'];
$descripcionAdicional = $_POST['DescripciónAdicional'];


$sql = "INSERT INTO discapacidad (TipoDediscapacidad, Dependencias, NivelDeafectacion, DescripciónAdicional) VALUES (?, ?, ?, ?)";


$stmt = $mysqli->prepare($sql);


$stmt->bind_param("ssss", $tipoDiscapacidad, $dependencias, $nivelDeAfectacion, $descripcionAdicional);


if ($stmt->execute()) {
    echo "Datos insertados correctamente en Tab 2.";
} else {
    echo "Error al insertar los datos en Tab 2: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
