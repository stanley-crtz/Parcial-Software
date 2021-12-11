<?php

class Database
{
    private $hostname = "db";
    private $database = "parcial";
    private $username = "root";
    private $password = "r00tadmin";
    private $charset = "utf8";

    function connect()
    {
        try {

            $conexion = "mysql:host=" . $this->hostname . ";dbname=" . $this->database . ";charset=" . $this->charset;
            $options = [
                PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
                PDO::ATTR_EMULATE_PREPARES => false,
            ];

            $pdo = new PDO($conexion, $this->username, $this->password, $options);

            echo 'Conection success';

            return $pdo;
        } catch (PDOException $e) {
            echo 'Error conexion: ' . $e->getMessage();
            exit;
        }
    }
}
