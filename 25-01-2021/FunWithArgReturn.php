<?php

function Add($a,$b){
    return $a+$b;
}

function Div($a,$b){
    return $a/$b;    
}

echo Add(10,10); 
echo "<br>";
echo Div(Add(10,10) ,Add(5,5) );

?>