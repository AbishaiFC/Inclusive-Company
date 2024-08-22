<?php
require_once 'DB.php'; 

$db = new DB();
$mysqli = $db->connect();

$usuario = $_POST['Usuario'];
$correo = $_POST['Correo'];
$contrasenna = $_POST['Contrasenna'];


$contrasenna = md5($contrasenna);

$sql = "INSERT INTO usuario (Usuario, Correo, Contrasenna, TipoUsuario) VALUES (?, ?, ?, 'Postulante')";

$stmt = $mysqli->prepare($sql);


if (!$stmt) {
    die("Error en la preparación de la consulta: " . $mysqli->error);
}

$stmt->bind_param("sss", $usuario, $correo, $contrasenna);

if ($stmt->execute()) {
    echo "Datos insertados correctamente en Tab 1.";
} else {
    echo "Error al insertar los datos en Tab 1: " . $stmt->error;
}

$stmt->close();
$mysqli->close();
?>

