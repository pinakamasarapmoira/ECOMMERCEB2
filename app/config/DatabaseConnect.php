<?php

class DatabaseConnect{

    private $host = "localhost";
    // private $database = "ecommerceb2";
    //private $dbusername = "root";
    //private $dbpassword = "";
    private $conn = null;

    private $database = "ecommerce_apastoral";
    private $dbusername = "apastoral";
    private $dbpassword = "A124storal_2024";

    public function connectDB(){
        
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