<?php
//Use this script
$PIN = $_POST['pin'];
echo password_hash($PIN, PASSWORD_DEFAULT, ['cost' => 12]);



?>
