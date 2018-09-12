<?php
require 'db.php';
session_start();
if(isset($_POST['email']) && isset($_POST['password'])){
  $email = $_POST['email'];
  $password = $_POST['password'];
  $create = "select * from users where email=:email AND password=:password";      
        $stmt = $conn->prepare ( $create );        
        $stmt->execute ( array (":email" => $email, ":password" => $password));
        $user = $stmt -> fetch(PDO::FETCH_OBJ);
        $returned_email = $user->email;
        $returned_password = $user->password;
        $returned_id = $user->id;
        $returned_type = $user->type;
        $returned_name = $user->name;
      
        if($email == $returned_email && $password == $returned_password){
 
          $_SESSION['email'] = $returned_email;
          $_SESSION['password'] = $returned_password;
          $_SESSION['id'] = $returned_id;
          $_SESSION['type'] = $returned_type;
          $_SESSION['name'] = $returned_name;
         ?>
        <script>window.location.href="index.php"</script>
        <?php
        }else{
         header("Location: login.php");
        }
}
?>