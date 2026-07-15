<?php 
session_start();
include '../../Database/Connection.php'; 

if(isset($_POST['Login'])){
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $stmt = $get->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute([
        'email' => $email
    ]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user){
        if(password_verify($password, $user['password'])){
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            header("Location: ../../Dashboard/Dashboard.php");
            exit;
        }
    }else{
        echo "Invalid email or password";
        exit;
    }
    
}






?>