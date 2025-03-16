<?php
setcookie("userSession", "", time() - 3600, "/");
session_start(); 
session_unset(); 
session_destroy();
header("location:http://localhost/hotel_booking/index.php");
exit();
