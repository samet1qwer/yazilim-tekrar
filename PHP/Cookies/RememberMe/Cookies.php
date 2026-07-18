<?php
session_start();
header('Content-Type: application/json; charset=utf-8');
include "../Connection/ConnectionDB.php";


if(isset($_POST['Login'])){
    $email = trim($_POST['email']);
    $password = $_POST['password'];

    $remember = isset($_POST['remember']) ? true : false;

    $stmt = $get->prepare("SELECT * FROM users WHERE email = :email");
    $stmt->execute([
        'email' => $email
    ]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if($user){
        if(password_verify($password, $user['password'])){
            $_SESSION['id'] = $user['id'];
            $_SESSION['name'] = $user['name'];
            $_SESSION['email'] = $user['email'];
            $_SESSION['role'] = $user['role'];

            if($remember){
                $token = password_hash(bin2hex(random_bytes(32)), PASSWORD_DEFAULT);
                $expires = time() + 60 * 60 * 24 * 30;
                $stmt = $get->prepare("UPDATE users SET remember_token = :token , expires = :expires WHERE id = :id");
                $stmt->bindParam(':token', $token);
                $stmt->bindParam(':expires', $expires);
                $stmt->bindParam(':id', $user['id']);
                $stmt->execute();

                setcookie('remember_token', $token, time() + 60 * 60 * 24 * 30, '/', '', true, true);  


            }

            echo json_encode(array("message" => "Giriş yapıldı"));
            exit;
        }
        else{
            echo json_encode(array("message" => "Kullanıcı bulunamadı"));
            exit;
        }
    }else{
        echo json_encode(array("message" => "Kullanıcı bulunamadı"));
        exit;
    }
    }


?>