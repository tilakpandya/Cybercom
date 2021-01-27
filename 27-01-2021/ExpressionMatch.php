<?php
$str = "This is string";

if(preg_match('/is/',$str)){
    echo"Match found";
}else{
    echo"Match not found";
}
?>