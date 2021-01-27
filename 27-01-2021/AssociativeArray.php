<?php
//associative array
$fruitPrice = array("apple"=>"20rs.","mango"=>"30r.","banana"=>"15rs.","grapes"=>"25rs.");

//access associative array values
echo "<br>".$fruitPrice['apple'];

echo'<br>';

//for each
foreach ($fruitPrice as $k=>$v) {
    echo "<br>$k => $v ";
}

?>