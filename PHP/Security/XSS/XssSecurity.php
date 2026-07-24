<?php
sesion_start();
include "../Connection/ConnectionDB.php";
if(!$_SESSION['user_id']){
header("Location: ../Login/Login.php");
exit;

}

$stmt = $db->prepare("SELECT * FROM users WHERE id = :id");
$stmt->execute(array(":id" => $_SESSION['user_id']));
$row = $stmt->fetch(PDO::FETCH_ASSOC);


?>






<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>xss</title>
</head>

<body>

    <div>
        <div>
            <h1>Merhaba <?php echo htmlspecialchars($row['name'] , ENT_QUOTES , 'UTF-8'); ?></h1>

        </div>

        <div>
            <h3>
                <a href="../Login/Logout.php">Cikis Yap</a>
            </h3>
        </div>
    </div>
</body>

</html>