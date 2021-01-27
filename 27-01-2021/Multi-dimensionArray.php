<?php

//multi dimensional Array
$games = ['indoor'=>['chess','ludo','snake&ladders','table-tanis'],
          'outdoor'=>['cricket','football','kabaddi','hockey']];

//access value
echo $games['indoor'][1];
echo '<br>';

//for each
foreach ($games as $i=>$k) {
    echo "<br><b>$i</b><br> ";
    foreach ($k as $key) {
        echo $key.'<br>';
    }
}


?>