<?php

include_once 'conexion.php';

class consultasDB
{
    public function getsumaHombre0_19()
    {
        $conexion = conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $consulta = 'SELECT SUM(Hombres) AS Hombres_0_19 FROM grupos_edad_queretaro WHERE id in (1,2,3,4)';
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $H0_19 = $stmt->fetchAll();
            $dbh = null;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $H0_19;
    }

    public function getsumaHombre20_34()
    {
        $conexion = conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $consulta = 'SELECT SUM(Hombres) AS Hombres_20_34 FROM grupos_edad_queretaro WHERE id in (5,6,7)';
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $H20_34 = $stmt->fetchAll();
            $dbh = null;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $H20_34;
    }

    public function getsumaHombre35_49()
    {
        $conexion = conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $consulta = 'SELECT SUM(Hombres) AS Hombres_35_49 FROM grupos_edad_queretaro WHERE id in (8,9,10)';
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $H35_49 = $stmt->fetchAll();
            $dbh = null;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $H35_49;
    }

    public function getsumaHombre50_64()
    {
        $conexion = conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $consulta = 'SELECT SUM(Hombres) AS Hombres_50_64 FROM grupos_edad_queretaro WHERE id in (11,12,13)';
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $H55_64 = $stmt->fetchAll();
            $dbh = null;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $H55_64;
    }

    public function getsumaHombre65_y_mas()
    {
        $conexion = conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $consulta = 'SELECT SUM(Hombres) AS Hombres_65_mas FROM grupos_edad_queretaro WHERE id in (14,15,16,17,18,19,20,21)';
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $H65_mas = $stmt->fetchAll();
            $dbh = null;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $H65_mas;
    }

    public function getsumaMujer0_19()
    {
        $conexion = conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $consulta = 'SELECT SUM(Mujeres) AS Mujeres_0_19 FROM grupos_edad_queretaro WHERE id in (1,2,3,4)';
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $M0_19 = $stmt->fetchAll();
            $dbh = null;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $M0_19;
    }

    public function getsumaMujer20_34()
    {
        $conexion = conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $consulta = 'SELECT SUM(Mujeres) AS Mujeres_20_34 FROM grupos_edad_queretaro WHERE id in (5,6,7)';
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $M20_34 = $stmt->fetchAll();
            $dbh = null;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $M20_34;
    }

    public function getsumaMujer35_49()
    {
        $conexion = conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $consulta = 'SELECT SUM(Mujeres) AS Mujeres_35_49 FROM grupos_edad_queretaro WHERE id in (8,9,10)';
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $M_35_49 = $stmt->fetchAll();
            $dbh = null;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $M_35_49;
    }

    public function getsumaMujer50_64()
    {
        $conexion = conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $consulta = 'SELECT SUM(Mujeres) AS Mujeres_50_64 FROM grupos_edad_queretaro WHERE id in (11,12,13)';
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $M50_64 = $stmt->fetchAll();
            $dbh = null;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $M50_64;
    }

    public function getsumaMujer65_y_mas()
    {
        $conexion = conexion::getInstancia();
        $dbh = $conexion->getDbh();
        try {
            $consulta = 'SELECT SUM(Mujeres) AS Mujeres_65_mas FROM grupos_edad_queretaro WHERE id in (14,15,16,17,18,19,20,21)';
            $stmt = $dbh->prepare($consulta);
            $stmt->setFetchMode(PDO::FETCH_ASSOC);
            $stmt->execute();
            $M65_mas = $stmt->fetchAll();
            $dbh = null;
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
        return $M65_mas;
    }

}
