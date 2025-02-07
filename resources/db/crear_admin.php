<?php
    require_once 'conexion.php';

    // Datos de los administradores
    $administradores = [
        ['aureliawebteseo', 'aureliasancheze5@gmail.com', 'DA*WT1'],
        ['miguelwebteseo', 'miguelwebteseo.4tocreativo@gmail.com', 'DA*WT2'],
        ['yoaliwebteseo', 'yoali.dwt.4tocreativo@gmail.com', 'DA*WT3']
    ];

    // Verificar si los administradores ya están registrados
    foreach ($administradores as $admin) {
        $nombre = $admin[0];
        $correo = $admin[1];
        $password = $admin[2];

        $stmt = Conexion::getInstancia()->getDbh()->prepare("SELECT id FROM usuarios WHERE correo = :correo AND rol = 1");
        $stmt->bindParam(':correo', $correo);
        $stmt->execute();
        if ($stmt->rowCount() > 0) {
            echo "El administrador $nombre ya está registrado.<br>";
            continue; // Salta al siguiente administrador
        }

        // Hashear la contraseña
        $hashed_password = password_hash($password, PASSWORD_DEFAULT);

        // Insertar el nuevo administrador en la base de datos con rol de administrador (rol 1)
        $stmt = Conexion::getInstancia()->getDbh()->prepare(
            "INSERT INTO usuarios (nombre, correo, password, rol) VALUES (:nombre, :correo, :password, 1)");
        $stmt->bindParam(':nombre', $nombre);
        $stmt->bindParam(':correo', $correo);
        $stmt->bindParam(':password', $hashed_password);
        if ($stmt->execute()) {
            echo "¡Administrador $nombre creado exitosamente!<br>";
        } else {
            echo "Error al crear el administrador $nombre.<br>";
        }
    }
?>
