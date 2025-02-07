<?php
require_once 'conexion.php';

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nombre = $_POST['nombre'];
        $correo = $_POST['correo'];
        $password = $_POST['password'];

        // Verificar si el correo ya está registrado
        $stmt = Conexion::getInstancia()->getDbh()->prepare("SELECT id FROM usuarios WHERE correo = :correo");
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            echo "El correo electrónico ya está registrado.";
            exit();
        }

        // Hashear la contraseña
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insertar el nuevo usuario en la base de datos como usuario normal (rol 2)
        $stmt = Conexion::getInstancia()->getDbh()->prepare(
            "INSERT INTO usuarios (nombre, correo, password, rol) VALUES (:nombre, :correo, :password, 2)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':password', $hashed_password);
        if ($stmt->execute()) {
            echo "¡Registro exitoso!";
        } else {
            echo "Error al registrar el usuario.";
        }
    }
?>