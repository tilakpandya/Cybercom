<?php

    function has_space($str)
    {
        if(preg_match('/ /',$str)){
            return TRUE;
        }else{
            return FALSE;
        }
        
    }

    $s = 'This line does\'t have space';

    if(has_space($s)){
        echo 'has at least one space';
    }
    else {
        echo 'has no space';
    }

?>