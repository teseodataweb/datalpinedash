<?php
class Conexion{
    private $dbh;
    private static $instancia;
    private $host = 'localhost';
    private $user = 'root';
    private $pass = '';
    private $db = 'datalpine';

    public static function getInstancia(){
        if(!self::$instancia){
            self::$instancia = new self();
        }
        return self::$instancia;
    }

    //Constructor
    private function __construct(){
        try {
            $this->dbh = new PDO("mysql:host=". $this->host . "; dbname=" . $this->db, $this->user, $this->pass);
            $this->dbh->setAttribute(PDO::ATTR_ERRMODE, PDO:: ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            echo $e->getMessage();
        }
    }

    public function getDbh(){
        return $this->dbh;
    }

}
