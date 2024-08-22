<?php
session_start();
require_once 'DB.php'; 

$db = new DB();
$mysqli = $db->connect();

if (!$mysqli) {
    die('Error al conectar con la base de datos.');
}

if (isset($_POST['Correo']) && isset($_POST['Contrasenna'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return $data;
    }

    $Correo = validate($_POST['Correo']);
    $Contrasenna = validate($_POST['Contrasenna']);

    if (empty($Correo)) {
        header('Location: HTML/InicioSesion.php?error=El correo es requerido');
        exit();
    } elseif (empty($Contrasenna)) {
        header('Location: HTML/InicioSesion.php?error=La contraseña es requerida');
        exit();
    } else {
        $Contrasenna = md5($Contrasenna);
        $sql = "SELECT * FROM usuario WHERE Correo = ? AND Contrasenna = ?";

        if ($stmt = $mysqli->prepare($sql)) {
            $stmt->bind_param('ss', $Correo, $Contrasenna);
            $stmt->execute();
            $result = $stmt->get_result();

            if ($result->num_rows === 1) {
                $row = $result->fetch_assoc();
                if ($row['Correo'] === $Correo && $row['Contrasenna'] === $Contrasenna) {
                    $_SESSION['Correo'] = $row['Correo'];
                    $_SESSION['TipoUsuario'] = $row['TipoUsuario'];
                    $_SESSION['ID_Usuario'] = $row['ID_Usuario'];

                    if ($row['TipoUsuario'] === 'Empresa') {
                        header("Location: ../HTML/ParamiE.html");
                    } elseif ($row['TipoUsuario'] === 'Postulante') {
                        header("Location: ../HTML/ParamiP.html");
                    } else {
                        header("Location: ../HTML/InicioSesion.php?error=Tipo de usuario desconocido");
                    }
                    exit();
                } else {
                    header("Location: ../HTML/InicioSesion.php?error=El correo o la contraseña son incorrectos");
                    exit();
                }
            } else {
                header("Location: ../HTML/InicioSesion.php?error=El correo o la contraseña son incorrectos");
                exit();
            }
            $stmt->close();
        } else {
            die('Error en la preparación de la consulta: ' . $mysqli->error);
        }
    }
} else {
    header("Location: ../HTML/InicioSesion.php");
    exit();
}

$mysqli->close();
?>
