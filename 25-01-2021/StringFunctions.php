<?php
$str = "this is an example of string .";

echo "String length is ". strlen($str);

echo "<br >String words count: <b>".str_word_count($str).'</b><br>';

print_r(str_word_count($str,1));

echo"<br>";

print_r(str_word_count($str,1,'.'));

echo "<br>String shuffling : <b>".str_shuffle($str).'</b><br>';

echo substr("Hello world",6);// start with 6 index
echo strrev($str);


$s1 = "I'm Tilak pandya and i like to play cricket";
$s2 = "I'm Tilak pandya and i like to watch web series.";
similar_text($s1,$s2,$result);
echo "<br>similarity between ( $s1 ) and ( $s2 ) is <b>$result</b>";

echo "<br> String before trim is <b>Hello World!</b> after trim <b>". trim("Hello World!","Hed!")."</b><br>";

$str2 = "This is a <img src='image.jpg'> string.";
$string_slashes = htmlentities(addslashes($str2));
echo $string_slashes; 
?>