<?php
$username = $_POST["username"];
$password = $_POST["password"];

include('./MinecraftAPI.php');

$api = new MinecraftAPI();

if($api->login($username, $password) == success){
// success
    echo 'Logged in successfully.';
}
elseif($api->login($username, $password) == migrated){
    echo 'Account migrated, use e-mail as username.';
}
elseif($api->login($username, $password) == failed){
// bad login
    echo 'Not logged in. Wrong username and/or password.';
}
else{
    echo 'Something went wrong.';
}

?>