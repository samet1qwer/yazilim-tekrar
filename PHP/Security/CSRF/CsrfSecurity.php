<?php
session_start();
if(!isset($_SESSION['csrf_token'])){
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>



<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


    <form action="islem.php" method="POST">
        <input type="hidden" name="csrf_token" id="csrf_token" value="<?php echo $_SESSION['csrf_token']; ?>">
    </form>



</body>

</html>




<!-- csrf kontrol -->

<?php 

if(isset($_POST['csrf_token']) && $_POST['csrf_token'] == $_SESSION['csrf_token']){
    echo "CSRF token dogru";
}else{
    echo "CSRF token yanlis";
}




?>