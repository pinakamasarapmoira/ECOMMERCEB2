<?php

class DatabaseConnect{

    private $host = "localhost";
    private $database = "ecommerceb2";
    private $dbusername = "root";
    private $dbpassword = "";
    private $conn = null;

    //$this->$host;


    public function connectDB(){

        /*$host = "localhost";
        $database = "ecommerceb2";
        $dbusername = "root";
        $dbpassword = "";*/
        
        $dsn = "mysql: host=$this->host;dbname=$this->database;";
        try {
            $this->conn = new PDO($dsn, $this->dbusername, $this->dbpassword);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);

            return $this->conn;
        } catch (Exception $e){
            echo "Connection Failed: " . $e->getMessage();
            return null;
        }
        
    }

}

?>