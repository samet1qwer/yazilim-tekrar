<?php
session_start();
include "../Connection/ConnectionDB.php";


if(isset($_POST["Register"])){
    
    $Username = trim($_POST["Username"]);
    $Password = password_hash($_POST["Password"] , PASSWORD_DEFAULT); 
    $Email = FILTER_VAR($_POST["Email"] , FILTER_VALIDATE_EMAIL); 


    if(empty($Username) || empty($Password) || empty($Email)){
        $_SESSION["error"] = "Lütfen tüm alanları doldurunuz";
        header("Location: ../Register/Register.php");
        exit();
    }

    if(filter_var($Email , FILTER_VALIDATE_EMAIL) == false){
        $_SESSION["error"] = "Lütfen geçerli bir email adresi giriniz";
        header("Location: ../Register/Register.php");
        exit();
    }

    if(strlen($Password) < 8){
        $_SESSION["error"] = "Lütfen en az 8 karakterli bir şifre giriniz";
        header("Location: ../Register/Register.php");
        exit();
    }

    $checkstmt = $conn->prepare("SELECT * FROM user WHERE Username = ? OR Email = ?");
    $checkstmt->execute([$Username , $Email]);
    $count = $checkstmt->rowCount();

    if($count > 0){
        $_SESSION["error"] = "Bu kullanıcı adı veya email zaten kullanılıyor";
        header("Location: ../Register/Register.php");
        exit();
    }


    $stmt = $conn->prepare("INSERT INTO user (Username , UserPassword , Email) VALUES (?,?,?)");
    $result = $stmt->execute([$Username , $Password , $Email]);

    if($result){
        header("Location: ../Login/Login.php");
    }else{
        echo "bir hata oluştu";
    }

    exit();


}






?>