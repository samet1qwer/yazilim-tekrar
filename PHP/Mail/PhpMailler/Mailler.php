<?php

header('Content-Type: application/json; charset=utf-8');

require "vendor/autoload.php";

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

if(isset($_POST['sendMail'])){
    $email = trim($_POST['email']);
    $subject = "Subject";
    $message = "Message body here $email";

    try {

        $mail = new PHPMailer(true);
        $mail->isSMTP();
        $mail->Host = 'smtp.gmail.com';
        $mail->SMTPAuth = true;
        $mail->Username = 'samet@example.com';
        $mail->Password = 'password';
        $mail->SMTPSecure = 'tls';
        $mail->Port = 587;

        $mail->setFrom('samet@example.com', 'Mailer');
        $mail->addAddress($email);
        $mail->isHTML(true);
        $mail->Subject = $subject;
        $mail->Body = $message;

        $mail->send();
        echo json_encode(array("statusCode"=>200 , "message" => "Mail gönderildi"));
        exit;
    

    } catch (Exception $e) {
        echo json_encode(array("statusCode"=>500 , "message" => $e->getMessage()));
        exit;
    }
    }