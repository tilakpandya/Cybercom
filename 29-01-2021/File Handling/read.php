<?php
 
$handle = fopen('name.txt','r');
$reading = file('name.txt');
foreach ($reading as $name) {
   echo"$name \n";
}


fclose($handle);
?>