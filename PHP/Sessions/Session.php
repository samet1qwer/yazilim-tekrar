<?php
session_start();
header('Content-Type: application/json; charset=utf-8');

if(isset($_POST['urun_ekle'])){
    
    $urun_id = $_POST['urun_id'];

    $stmt = $db->prepare("SELECT * FROM urunler WHERE urun_id = :urun_id");
    $stmt->bindParam(':urun_id', $urun_id);
    $stmt->execute();
    $urun = $stmt->fetch(PDO::FETCH_ASSOC);

    if (!$urun) {
        echo json_encode(array("message" => "Urun bulunamadı"));
        exit;
    }

    $urun_adi = $urun['urun_adi'];
    $urun_fiyat = $urun['urun_fiyat'];


    $_SESSION['sepet'][$urun_id] = [
        'urun_adi' => $urun_adi,
        'urun_id' => $urun_id,
        'urun_fiyat' => $urun_fiyat
    ];

    echo json_encode(array("message" => "Urun eklendi"));
    exit;











}