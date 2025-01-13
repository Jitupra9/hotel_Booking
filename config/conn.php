<?php
class Db {
    private $server = "localhost";
    private $username = "root";
    private $password = "";
    private $db = "hotel-management";
    private $conn;

     function __construct() {
        try {
            $this->conn = new mysqli($this->server, $this->username, $this->password, $this->db);
            if ($this->conn->connect_error) {
                throw new Exception("Connection failed: " . $this->conn->connect_error);
            }
        } catch (Exception $e) {
            echo $e->getMessage();
            $this->conn = null; 
        }
    }

    function connGet() {
        return $this->conn;
    }
    function closeConn() {
        if ($this->conn) {
            $this->conn->close();
        }
    }
}
