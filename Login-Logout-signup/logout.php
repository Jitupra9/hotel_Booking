<?php
setcookie("userSession", "", time() - 3600, "/");
session_start(); // Start the session
session_unset(); // Unset all session variables
session_destroy(); // Destroy the session";
header("location:http://localhost/project_hotel_managemnt/index.php");

exit();
