<?php

require_once 'DB.php'; 


$db = new DB();


$mysqli = $db->connect();

$perfilProfesional = $_POST['perfilProfesional'];
$descripcionPerfilProfesional = $_POST['DescripcionPerfilProfesional'];
$curriculum = $_FILES['Curriculum']['name'];
$imss = $_POST['IMSS'];
$nivelDeEstudios = $_POST['NivelDeEstudios'];

    $sql = "INSERT INTO perfilprofesional (PerfilProfesional, DescripcionPerfilProfesional, Curriculum, IMSS, NivelDeEstudios) VALUES (?, ?, ?, ?, ?)";


    $stmt = $mysqli->prepare($sql);

    $stmt->bind_param("sssss", $perfilProfesional, $descripcionPerfilProfesional, $curriculum, $imss, $nivelDeEstudios);


    if ($stmt->execute()) {
        echo "Datos insertados correctamente en Tab 3.";
    } else {
        echo "Error al insertar los datos en Tab 3: " . $stmt->error;
    }

    $stmt->close();
    $conn->close();
?>
