<?php
 
$handle = fopen('name.txt','w');

fwrite($handle,"Tilak \n");
fwrite($handle,"Pandya");

fclose($handle);

echo "Written";
?>