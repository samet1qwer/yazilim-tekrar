<?php
header('Content-Type: application/json; charset=utf-8');
include "../Connection/ConnectionDB.php";


if(isset($_POST['id']) && isset($_POST['name']) && isset($_POST['email']) && isset($_POST['password'])){
    $id = $_POST['id'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'] , PASSWORD_DEFAULT);

    $user = $db->prepare("SELECT * FROM users WHERE id = :id");
    $user->bindParam(':id', $id);
    $user->execute();
    if($user->rowCount() == 0){
        echo json_encode(array("message" => "Kullanıcı bulunamadı"));
        exit;
    }

    $sql = "UPDATE users SET name = :name, email = :email, password = :password WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->bindParam(':name', $name);
    $stmt->bindParam(':email', $email);
    $stmt->bindParam(':password', $password);
    $stmt->execute();
    echo json_encode(array("message" => "Kullanıcı güncellendi"));
    exit;
}else{
    echo json_encode(array("message" => "Kullanıcı bilgileri eksik"));
    exit;
}








?>