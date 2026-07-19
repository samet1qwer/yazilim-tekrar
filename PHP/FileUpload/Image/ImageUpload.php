<?php
header('Content-Type: application/json; charset=utf-8');
include "../../db.php";


if(isset($_POST['image_upload'])){
    if(isset($_FILES['image']) && $_FILES['image']['error'] == 0){
        $file = $_FILES['image'];
        $allowed = array('jpg' , 'jpeg' , 'png' , 'gif');
        $allowedTypes = array('image/jpeg' , 'image/png' , 'image/gif');
        
        $fileType = $file['type'];
        $fileName = $file['name'];
        $fileSize = $file['size'];
        $fileTmpName = $file['tmp_name'];
        $fileExtension = pathinfo($fileName, PATHINFO_EXTENSION);

        if(in_array($fileType , $allowedTypes) && in_array($fileExtension , $allowed)){
            if($fileSize <= 1000000){
                $newFileName = uniqid() . '.' . $fileExtension;
                $uploadPath = 'uploads/' . $newFileName;
                $upload = move_uploaded_file($fileTmpName , $uploadPath);
                if(!$upload){
                    echo json_encode(array("message" => "Resim yükleme basarisiz"));
                    exit;
                }
                $sql = "INSERT INTO images (image) VALUES (:image)";
                $stmt = $db->prepare($sql);
                $stmt->bindParam(':image', $uploadPath);
                $stmt->execute();
                echo json_encode(array("message" => "Resim yüklendi"));
                exit;
            }else{
                echo json_encode(array("message" => "Resim boyutu 1MB'dan fazla olamaz"));
                exit;
            }
        }else{
            echo json_encode(array("message" => "Gecersiz resim dosyasi"));
            exit;
        }
        
    
    }else{
        echo json_encode(array("message" => "Resim dosyasi bulunamadi"));
        exit;
    }




}