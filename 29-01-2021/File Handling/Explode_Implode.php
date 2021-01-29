<?php
    $filename= 'name.txt';
    $handle = fopen($filename,'r');
    $data= fread($handle,filesize($filename));
    
    //Explode
    $names_array = explode(',',$data);
    print_r($names_array);

    //implode
    $string = implode(',',$names_array);
    echo "\n $string";
?>