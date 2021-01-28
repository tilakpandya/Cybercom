<?php
$time = time();
$actual_date = date('D M Y @ H:i:s',$time);
$modified = date('D M Y @ H:i:s', strtotime('+ 1 week 2 hours 30 seconds'));
echo "$actual_date<br>$modified";
?>