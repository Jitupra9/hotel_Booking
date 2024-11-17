<?php
session_start(); 

if (isset($_COOKIE['userSession'])) {
    $user_id = $_COOKIE['userSession'];
    include_once '../coon.php'; 
    if (!$conn) {
        die("Database connection failed");
    }

    $sql = "SELECT * FROM user WHERE user_id='$user_id'";
    $result = mysqli_query($conn, $sql);
    
    if (mysqli_num_rows($result) > 0) {
        $userDetails = mysqli_fetch_assoc($result);
        $_SESSION['user'] = $userDetails; 
        header("Location: http://localhost/project_hotel_managemnt/");
        exit(); 
    } else {
        header("Location: http://localhost/hotel_managment/login.php");
        exit();
    }
    

} else {
    header("Location: login.php");
    exit();
}
