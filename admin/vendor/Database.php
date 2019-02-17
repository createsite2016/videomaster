<?php

class Database{
    public $isConn;
    protected $datab;
    static $username, $password, $host, $dbname;



    // Соединение с БД
        public function __construct($username = "cw45544_look", $password = "16213150", $host="localhost", $dbname = "cw45544_look", $options = []){
            $this->isConn = TRUE;
        try {
            $this->datab = new PDO("mysql:host={$host};dbname={$dbname};charset=utf8", $username, $password, $options);
            $this->datab->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->datab->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo 'Не возможно установить соединение с БД';
            exit;
        }

    }


    // отключение от бд
    public function Disconnect(){
        $this->datab = NULL;
        $this->isConn = FALSE;
    }
    // получить данные
    public function getRow($query, $params = []){
        try {
            $stmt = $this->datab->prepare($query);
            $stmt->execute($params);
            return $stmt->fetch();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }
    // получить массив данных
    public function getRows($query, $params = []){
        try {
            $stmt = $this->datab->prepare($query);
            $stmt->execute($params);
            return $stmt->fetchAll();
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }
    // вставить данные
    public function insertRow($query, $params = []){
        try {
            $stmt = $this->datab->prepare($query);
            $stmt->execute($params);
            return TRUE;
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }
    // обновить данные
    public function updateRow($query, $params = []){
        $this->insertRow($query, $params);
    }
    // удалить данные
    public function deleteRow($query, $params = []){
        $this->insertRow($query, $params);
    }
    // получить последний добавленный ID
    public function lastInsertId($query, $params = []){
        try {
            $stmt = $this->datab->prepare($query);
            $stmt->execute($params);
            $stmt = $this->datab->lastInsertId($query);
            return $stmt;
        } catch (PDOException $e) {
            throw new Exception($e->getMessage());
        }
    }



}

?>
