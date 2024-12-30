<?php
$user_id = $_POST["user_id"];
$property_id = $_POST['property_id'];
$date = $_POST['date'];

include_once '../config/coon.php';
$query = "insert into wishlist values('$property_id','$user_id','$date')";
$result = mysqli_query($conn, $query);
if($result){
    echo json_encode(['success' => true]);
}else{
    echo json_encode(['success' => false]);
    $stmt->close();
    $conn->close();
}
