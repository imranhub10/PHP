<?php
    $num = 80;
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