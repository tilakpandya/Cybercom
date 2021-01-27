<?php
$find = 'is';
$find_length = strlen($find);
$offset = 0;
$str = "this is a string, and it is an example";

while ($str_pos = strpos($str,$find,$offset)) {
    echo '<b>'.$find.'</b> found at '.$str_pos.'<br>';
    $offset = $str_pos + $find_length;
}
?>