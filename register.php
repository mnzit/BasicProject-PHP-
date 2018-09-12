<?php
require 'db.php';
session_start();
if(isset($_POST['name']) && isset($_POST['password']) && isset($_POST['email'])){
    $name = $_POST['name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    try {
        $create = "Insert into users (name, email, type, password)";
        $create .= " VALUES(:name,:email,:type,:password)";
        
        $stmt = $conn->prepare ( $create );
        
        $stmt->execute ( array (
                ":name" => $name,
                ":email" => $email,
                ":type" => 'member',
                ":password" => $password,

        ) );
        if ($stmt) {
            header("location:login.php");
        }
    } catch ( PDOException $e ) {
        echo "Error" . $e->getMessage ();
    }
}
?>