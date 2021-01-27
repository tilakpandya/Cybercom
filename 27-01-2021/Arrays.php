<?php 


//Introduction of Arrays
$fruits = array("apple","mango","banana","grapes");

//access values
echo $fruits[0];
echo "<br>$fruits[1]";

//add value at specific index
$fruits[4]="watermelon";

//print values
echo $fruits;//got an error
print_r($fruits);


//for each
foreach ($fruits as $k) {
    echo "<br>$k  ";
}

?> 