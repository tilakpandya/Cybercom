<?php 

$dir = 'files';

if ($handle = opendir($dir.'/')) {
    echo "Looking inside '$dir' <br>";
    while ($file = readdir($handle)) {
        if ($file !='.' && $file!='..') {
            echo "<a href='$dir/$file'>$file</a><br>";
        }
    }
}

?>