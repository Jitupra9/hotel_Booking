<?php
session_start();

$email = $_POST['email'];
$password = $_POST['password'];

try {
    include_once '../config/coon.php';
    
    if (!$conn) {
        throw new Exception("Database connection failed");
    }
    $stmt = $conn->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
    $stmt->bind_param("ss", $email, $password); // "ss" means both parameters are strings
    $stmt->execute();
    $result = $stmt->get_result();
    $stmt->close();
    $conn->close();
    if ($result->num_rows > 0) {
        $userDetails = $result->fetch_assoc();
        $_SESSION['user'] = $userDetails; 
        $cookie_name = "userSession";
        $cookie_value = $userDetails['user_id']; 
        $cookie_expiration = time() + (365 * 24 * 60 * 60); 
        setcookie($cookie_name, $cookie_value, $cookie_expiration, "/");
        
        header("Location: http://localhost/project_hotel_managemnt/");
        // print_r($_SESSION['user']);
        exit();
    } else {
        echo "<script>
        alert('Invelid user password .');
        window.location.href = 'http://localhost/project_hotel_managemnt/login/login.php';
      </script>";
exit();
    }

} catch (Exception $e) {
    echo "<script>
            alert('Server currently not available, please try again later.');
            window.location.href = 'http://localhost/project_hotel_managemnt/';
          </script>";
    exit();
}
?>
