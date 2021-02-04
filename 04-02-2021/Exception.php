<?php
$age=16;
try {
    if ($age>18) {
        echo"Old enough";
    } else {
        throw new Exception("Not Old Enough");
        
    }
    
} catch (Exception $th) {
    echo 'Error: '.$th->getMessage();
}
?>