<?php
header('Content-Type: application/json; charset=utf-8');
include "../Connection/ConnectionDB.php";

if(isset($_POST['newTable'])){
    $TableName = trim($_POST['TableName']);
   
    $conn = $newTable->prepare("CREATE TABLE `$TableName` (id INT(11) NOT NULL AUTO_INCREMENT PRIMARY KEY)");
    $conn->execute();
    if($conn->rowCount() > 0){
        echo json_encode(array("message" => "Tablo olusturuldu"));
        exit;
    }
    echo json_encode(array("message" => "Tablo olusturulamadi"));
    exit;
}




?>