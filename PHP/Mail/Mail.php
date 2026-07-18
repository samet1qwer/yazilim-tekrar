<?php
header('Content-Type: application/json; charset=utf-8');

if(isset($_POST['sendMail'])){
    $email = trim($_POST['email']);
    $subject = "Subject";
    $message = "Message body here $email ";

    $headers = "From: samet@example.com" . "\r\n";
    $headers .= "Reply-To: $email" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

    mail($email,$subject,$message,$headers);
    echo json_encode(array("statusCode"=>200 , "message" => "Mail gönderildi"));
    exit;
    }


?>