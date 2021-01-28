<?php

$http_client_ip = $_SERVER['HTTP_CLIENT_IP'];
$http_x_forwarded_for = $_SERVER['HTTP_X_FORWARDED_FOR'];
$remote_addr = $_SERVER['REMOTE_ADDR'];

if(!empty($http_client_ip)){
    $ip_add = $http_client_ip;
}elseif (!empty($http_x_forwarded_for)) {
    $ip_add = $http_x_forwarded_for;
}else {
    $ip_add = $remote_addr;
}

echo $ip_add;
?>