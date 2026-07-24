<?php
session_start();
header('Content-Type: text/json; charset=utf-8');


include "../Connection/ConnectionDB.php";
if(!isset($_SESSION['user_id'])){
    header("Location: ../Login/Login.php");
    exit;
    
    }
    
if(isset($_POST['profil_update']))
    {
        $password = password_hash($_POST['password'] , PASSWORD_DEFAULT);
        $stmt = $db->prepare("UPDATE users SET name = :name, email = :email, password = :password WHERE id = :id");
        $stmt->bindParam(':name', $_POST['name']);
        $stmt->bindParam(':email', $_POST['email']);
        $stmt->bindParam(':password', $password);
        $stmt->bindParam(':id', $_SESSION['user_id']);
        $success = $stmt->execute();

        if($success == true)
        {
            echo json_encode(array("message" => "Profil güncellendi"));
            exit;
        }
        else
        {
            echo json_encode(array("message" => "Profil güncellenemedi"));
            exit;
        }


    }