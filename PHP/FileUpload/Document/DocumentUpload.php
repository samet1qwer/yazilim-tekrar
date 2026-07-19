<?php
header('Content-Type: application/json; charset=utf-8');
include "../../db.php";


if(isset($_POST['file_upload'])){

    if($_FILES['Document'] && $_FILES['Document']['error'] == 0){

        $fileName = $_FILES['Document']['name'];
        $fileType = $_FILES['Document']['type'];
        $fileSize = $_FILES['Document']['size'];
        $fileTmpName = $_FILES['Document']['tmp_name'];
        
        $allowed = ['doc' , 'docx' , 'pdf'];
        $allowedTypes = ['application/msword' , 'application/vnd.openxmlformats-officedocument.wordprocessingml.document' , 'application/pdf'];
        $extension = pathinfo($fileName, PATHINFO_EXTENSION);
        $allowedSize = 1000000;

        if(in_array($fileType , $allowedTypes) && in_array($extension , $allowed) && $fileSize <= $allowedSize){
            $newFileName = uniqid() . '.' . $extension;
            $uploadPath = 'uploads/' . $newFileName;
            $upload = move_uploaded_file($fileTmpName , $uploadPath);
            if(!$upload){
                echo json_encode(array("message" => "Dokuman yuklenemedi"));
                exit;
            }
            $sql = "INSERT INTO documents (document) VALUES (:document)";
            $stmt = $db->prepare($sql);
            $stmt->bindParam(':document', $uploadPath);
            $stmt->execute();
            echo json_encode(array("message" => "Dokuman yuklendi"));
            exit;
        }else{
            echo json_encode(array("message" => "Dokuman boyutu 1MB'dan fazla olamaz veya gecersiz"));
            exit;
        }







    
    }else{
        echo json_encode(array("message" => "Dokuman yuklenemedi"));
        exit;
    }


}


?>