<?php 

try{
    include_once '../config/coon.php';
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "select * from property";
    $result = $conn->query($sql);
    $rooms = [];
    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
            $rooms[] = $row;
        }
    }
    header('Content-Type: application/json');
    echo json_encode($rooms);
    $conn->close();
}catch(Exception $error){

}