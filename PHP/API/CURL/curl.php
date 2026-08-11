<?php
$hedef_url = "sametkarakurt.com.tr";

$ch = curl_init($hedef_url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

$response = curl_exec($ch);

curl_close($ch);

echo $response;

?>