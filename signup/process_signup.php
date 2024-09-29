<?php
session_start(); // Start the session

$email = $_POST['email'];
$password = $_POST['password'];

$fullName = $_POST['fullname'];
$contactNo = $_POST['contact'];
$address = $_POST['address'];
$Dob = $_POST['dob'];
$conn = mysqli_connect("localhost", "root", "", "hotel-management");


$sql = "INSERT INTO `user` (`user_id`, `email`, `password`, `full_name`, `contact`, `address`, `dob`) VALUES (NULL, '{$email}', '{$password}', '{$fullName}', '{$contactNo}', '{$address}', '{$Dob}');";
$result = mysqli_query($conn, $sql);

header("Location:http://localhost//project_hotel_managemnt/index.php");// Close the statement and connection
if (isset($result)) {
    echo "<scripts>alert('signup sucessfuly completed')</scripts>";
}
mysqli_close($conn);
