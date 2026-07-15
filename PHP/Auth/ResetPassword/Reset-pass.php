<?php

include_once '../../db.php';

if (isset($_GET['token'])) {

    $token = $_GET['token'];

    $stmt = $db->prepare("SELECT * FROM users WHERE token = :token");
    $stmt->bindParam(':token', $token);
    $stmt->execute();

    $user = $stmt->fetch(PDO::FETCH_ASSOC);

    if ($user && $user['expires'] > time()) {

        if (isset($_POST['password'])) {

            $newPassword = trim($_POST['newPassword']);
            $confirmPassword = trim($_POST['confirmPassword']);

            if (strlen($newPassword) < 8) {
                echo "Şifre en az 8 karakter olmalıdır.";
                exit();
            }

            if ($newPassword === $confirmPassword) {

                $hashedPassword = password_hash($newPassword, PASSWORD_DEFAULT);

                $stmt = $db->prepare("UPDATE users SET password = :password, token = NULL, expires = NULL WHERE email = :email");
                $stmt->bindParam(':password', $hashedPassword);
                $stmt->bindParam(':email', $user['email']);
                $stmt->execute();

                echo "Şifre başarıyla değiştirildi.";
                exit();

            } else {

                echo "Şifreler eşleşmiyor.";
                exit();

            }

        }

    } else {

        echo "Geçersiz veya süresi dolmuş token.";
        exit();

    }

}

?>