<?php
include_once '../../db.php';

if(isset($_POST['forgotPass'])){
    $email = trim($_POST['email']);

    $stmt = $db->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->bindParam(':email', $email);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user){
        $expires = time() + 3600;
        $token = bin2hex(random_bytes(50));
        $stmt = $db->prepare("UPDATE users SET token = :token , expires = :expires WHERE email = :email");
        $stmt->bindParam(':token', $token);
        $stmt->bindParam(':email', $email);
        $stmt->bindParam(':expires', $expires);
        $stmt->execute();

        $url = "http://localhost/PHP/Auth/ForgotPassword/ResetPass.php?token=$token";

        $message = "Click the link below to reset your password:\n\n" . $url;

        mail($email, 'Password Reset', $message);

        echo "An email has been sent to $email with instructions on how to reset your password.";
    } else 
    {
        echo "No user found with email $email.";
        }



}






?>