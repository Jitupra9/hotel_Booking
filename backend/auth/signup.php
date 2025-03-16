<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['password']);
    $cnfpassword = trim($_POST['cnfpassword']);

    if ($password === $cnfpassword) {
        include_once 'User.php';
        $user = new User();
        echo $user->Signup($email, $password); 
    } else {
        echo json_encode(["error" => "Your passwords do not match"]);
    }
} else {
    echo json_encode(["error" => "Invalid request method"]);
}

