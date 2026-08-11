<?php
header('Content-Type: application/json; charset=utf-8');
include "../../db.php";

if (isset($_POST['görev']) && isset($_POST['tarih'])) {
    $görev = $_POST['görev'];
    $tarih = md5($_POST['tarih']);

    $stmt = $db->prepare("INSERT INTO todo (görev, tarih) VALUES (:görev, :tarih)");
    $stmt->bindParam(':görev', $görev);
    $stmt->bindParam(':tarih', $tarih);
    $stmt->execute(); 


    $json = array('görev' => $görev, 'tarih' => $tarih);
    echo json_encode($json);
}