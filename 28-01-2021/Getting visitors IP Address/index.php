<?php
require 'conf.inc.php';

foreach ($ip_blocked as $ip) {
   if ($ip == $ip_address) {
       die("Your IP Address $ip has been blocked");  
   } else {
       # code...
   }
   
}

?>

<h1>Welcome!</h1>