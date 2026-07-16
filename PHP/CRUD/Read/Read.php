<?php
header('Content-Type: application/json; charset=utf-8');
include "../Connection/ConnectionDB.php";



if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "SELECT * FROM users WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if (!$user) {
        echo "Kullanıcı bulunamadı";
        exit;
    }


    echo json_encode($user);
    exit;


    }














?>