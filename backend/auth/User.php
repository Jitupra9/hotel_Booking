<?php

include_once '../../config/conn.php';
class User
{
    private $Db;
    private $conn;
    public function __construct()
    {
        $this->Db = new Db();
        $this->conn = $this->Db->connGet();
    }
    public function Login($useremail, $userpass)
    {
        if(!$this->conn){
            return json_encode(["error"=>"database connection failed"]);
        }
        $sql = "select * from user where email = ? and password = ?";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $useremail,$userpass);
        $stmt->execute();
        $result = $stmt->get_result();
        if($result->num_rows === 1){
            session_start();
            $_SESSION['user'] = $result;
            return json_encode(["success"=>true,"redirect" => "http://localhost/hotel_booking/index.php"]);
        }else{
            return json_encode(["error" => "invild user & password"]);
        }

    }
    public function Signup($email, $pass)
    {   
        if(!$this->conn){
            return json_encode(["error"=>"database connection failed"]);
        }
        $sql = "insert into user(email,password) values(?,?)";
        $stmt = $this->conn->prepare($sql);
        $stmt->bind_param("ss", $email, $pass);
        $result = $stmt->execute();
        if($result){
            return json_encode(["success" => "Account has been successfully created"]);
        }else{
             return json_encode(["error" => "Failed to create an account"]);
        }
 
    }
}