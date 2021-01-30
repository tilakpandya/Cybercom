<?php

$to = 'tilakpandya2@gmail.com';
$subject = "This mail using PHP";
$body = "Hello,\n\n i'm sending this mail using php scrpt.\n hope you like it.";
$headers = "From: tilakpandya2@gmail.com ";

if(mail($to,$subject,$body,$headers)){
    echo 'Email has been sent to'.$to;
}
else {
    echo"there was a problem";
}

?>