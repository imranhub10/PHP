<?php
    $num = 5; 
    function factorial($num) 
    {  
        if ($num == 0) 
        return 1; 
        else
        return $num * factorial($num-1);  
    } 

    echo "Factorial of $num is: " . factorial($num); 

?>