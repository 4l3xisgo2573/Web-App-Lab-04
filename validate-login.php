<?php
$user_id = $_POST['uid'];
$password = $_POST['pwd'];

if ($user_id !="Alexis")
    echo "Valid UserID";
else
    echo "Invalid Credentials";
echo $user_id;
echo $password;
?>