<?php
//loop through the numbers from 1 to 100
for($i = 1; $i <= 100; $i++){
 
    //check if the number is prime
    if(isPrime($i)){
        echo $i . " ";
    }
}

//function to check if the number is prime
function isPrime($n)
{
    //check if n is less than 2
    if($n < 2){
        return false;
    }
 
    //check if n is divisible by any number other than 1 and itself
    for($i = 2; $i < $n; $i++){
        if($n % $i == 0){
            return false;
        }
    }
 
    //if it passes all the above conditions it is prime
    return true;
}
?>