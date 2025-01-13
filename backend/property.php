<?php
include_once '../config/conn.php';

class Properties{
    private $conn;

    function __construct() {
        $this->conn = (new Db())->connGet();
    }

    function propGet() {
        $query = "SELECT * FROM property";
        if (!$this->conn) {
            return json_encode(["error" => "Database connection failed"]);
        }
        $result = $this->conn->query($query);
        if ($result) {
            if ($result->num_rows > 0) {
                $properties = [];
                while ($row = $result->fetch_assoc()) {
                    $properties[] = $row;
                }
                return json_encode($properties); 
            } else {
                return json_encode([]);
            }
        } else {
            return json_encode(["error" => "Query failed: " . $this->conn->error]);
        }
    }
    function propGetone($id) {
        $query = "SELECT * FROM property where id = $id";
        if (!$this->conn) {
            return json_encode(["error" => "Database connection failed"]);
        }
        $result = $this->conn->query($query);
        if ($result) {
            if ($result->num_rows > 0) {
                $properties = [];
                while ($row = $result->fetch_assoc()) {
                    $properties[] = $row;
                }
                return json_encode($properties); 
            } else {
                return json_encode([]);
            }
        } else {
            return json_encode(["error" => "Query failed: " . $this->conn->error]);
        }
    }
    function updateProp(){
    }
}
