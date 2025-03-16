<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = filter_var(trim($_POST['useremail']), FILTER_SANITIZE_EMAIL);
    $password = trim($_POST['userpassword']);
    include_once 'User.php';
    $user = new User();
    echo $user->Login($email, $password);
} else {
    echo json_encode(["error" => "Invalid request method"]);
}
