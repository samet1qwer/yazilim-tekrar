<?php
session_start();
header('Content-Type: application/json; charset=utf-8');
if(isset($_SESSION['user_id'])){
    header("Location: ../../Dashboard/Dashboard.php");
    exit;
}
if(isset($_COOKIE['remember_token'])){

    $token = password_hash($_COOKIE['remember_token'], PASSWORD_DEFAULT);
    $stmt = $get->prepare("SELECT * FROM users WHERE remember_token = :token");
    $stmt->execute([
        'token' => $token
    ]);

    $user = $stmt->fetch(PDO::FETCH_ASSOC);
    if($user){
        $_SESSION['id'] = $user['id'];
        $_SESSION['name'] = $user['name'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'];
        header("Location: ../../Dashboard/Dashboard.php");
        exit;
        }
    else{
        echo json_encode(array("message" => "Kullanıcı bulunamadı"));
        exit;
    }



}



















?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>

<body>

</body>

</html>