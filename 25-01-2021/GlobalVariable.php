<?php
$user_ip = $_SERVER['REMOTE_ADDR'];

function echo_ip(){
    global $user_ip;
    $string = "your IP Address is $user_ip";
    return $string;
}

echo echo_ip();

?>