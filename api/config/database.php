<?php
class Database {

    // укажите свои учетные данные базы данных
    private $host = "localhost";
    private $db_name = "test_rest_api";
    private $username = "postgres";
    private $password = "20iVPD10qskh2000";
    public $conn;

    // получаем соединение с БД
    public function getConnection(){

        $this->conn = null;

        try {
            $this->conn = new PDO("pgsql:host=" . $this->host . ";dbname=" . $this->db_name, $this->username, $this->password);
            $this->conn->exec("set names utf8");
        } catch(PDOException $exception){
            echo "Connection error: " . $exception->getMessage();
        }

        return $this->conn;
    }
}