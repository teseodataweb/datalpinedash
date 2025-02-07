<?php

include_once './config.php';


class userDB
{

    public function createUser($name, $email, $passwords, $date_register)
    {
        $connect = conexion::getInstancia();
        $dbh = $connect->getDbh();
        try {
            $cons = 'INSERT INTO usuarios(null, nombre, email, contraseña, fecha_registro, tipo_usuario) VALUES (?,?,?,?,?)';
            $stmt = $dbh->prepare($cons);
            $stmt->bindParam(1, $name);
            $stmt->bindParam(2, $email);
            $stmt->bindValue(3, password_hash($passwords, PASSWORD_DEFAULT));
            $stmt->bindParam(4, $date_register);
            $stmt->bindParam(5, 'usuario');

            $stmt->execute();
            $dbh = null;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function currentEmail($email)
    {
        $connect = conexion::getInstancia();
        $dbh = $connect->getDbh();
        try {
            $cons = 'SELECT id FROM usuarios WHERE email = ?';
            $stmt = $dbh->prepare($cons);
            $stmt->bindParam(1, $email);
            $stmt->execute();
            $result = $stmt->fetch();
            $dbh = null;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        if (isset($result['id'])) {
            return true;
        } else {
            return false;
        }
    }

    public function getPasswordHash($passwords)
    {
        $conexion = Conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $cons = 'SELECT contraseña FROM usuarios WHERE nombre=?';
            $stmt = $dbh->prepare($cons);
            $stmt->bindParam(1, $passwords);
            $stmt->execute();
            while ($row = $stmt->fetch()) {
                $passwords = $row['contraseña'];
            }
            $dbh = null;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $passwords;
    }

    public function getUser_userTipe($userTipe){
        $conexion = conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $cons = 'SELECT id, tipo_usuario FROM usuarios WHERE nombre=?';
            $stmt=$dbh->prepare($cons);
            $stmt->bindParam(1,$userTipe);
            $stmt->execute();
            while($row = $stmt->fetch()){
                $userType = $row['tipo_usuario'];
            }
            $dbh=null;

        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $userType;
    }
}
