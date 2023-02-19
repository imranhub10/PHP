<?php
//x0+x1+x2+⋯+xk (Result of the clause)//
    $x = array(1,2,3,4,5);
    $sum = 0;
    foreach($x as $value) {
        $sum += $value;
    }
    echo $sum."<br>";


//1/1!+2/2!+3/3!+⋯+n/n! (Result of the clause)//
    $sum = 0;

    for ($n = 1; $n <= 10; $n++) {
        $sum += $n / factorial($n);
    }

    echo $sum;

    function factorial($n) 
    { 
    $fact = 1; 
    for ($i = 1; $i <= $n; $i++) { 
            $fact = $fact * $i; 
    } 
    return $fact; 
    } 
?>
