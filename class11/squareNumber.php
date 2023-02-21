<?php
    $num = 65;
    $sqrt = sqrt($num);
    
    if($sqrt == round($sqrt))
    {
        echo "$num is a square number";
    }
    else
    {
        echo "$num is not a square number";
    }
?>