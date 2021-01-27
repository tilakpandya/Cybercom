<?php

if (isset($_GET['user_name']) && !empty($_GET['user_name'])) {
    $username = $_GET['user_name'];
    $user_name_lc = strtolower($username);

    if($user_name_lc == 'tilak'){
        echo 'you are the best   '.$username;
    }
} 



/*$string = "It Could be any case";

$str_lower = strtolower($string);
$str_upr = strtoupper($string);

echo "<br>$str_lower<br>$str_upr";*/

?>

<form action="#" method="GET">
 Name:<input type="text" name="user_name"><br><br>
 <input type="submit" value="submit">
</form>