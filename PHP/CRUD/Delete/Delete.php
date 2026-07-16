<?php
include "../Connection/ConnectionDB.php";
header('Content-Type: application/json; charset=utf-8');

if (isset($_GET['id'])) {
    $id = (int)$_GET['id'];

    $sql_user = "SELECT * FROM users WHERE id = :id";
    $stmt_user = $db->prepare($sql_user);
    $stmt_user->bindParam(':id', $id);
    $stmt_user->execute();
    $user = $stmt_user->fetch(PDO::FETCH_ASSOC);
    if (!$user) {
        echo json_encode(array("message" => "Kullanıcı bulunamadı"));
        exit;
    }


    $sql = "DELETE FROM users WHERE id = :id";
    $stmt = $db->prepare($sql);
    $stmt->bindParam(':id', $id);
    $stmt->execute();
    echo json_encode(array("message" => "Kullanıcı silindi"));
    exit;
}


?>