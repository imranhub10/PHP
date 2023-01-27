<?php
    $num1=23;
    $num2=50;
    $num3=20;
    $student="Al Imran";
    
   
   
//Addition of two number//
    $Add=$num1+$num2;
    echo "Add of two number: ",$Add;
    echo "<br>";
    echo"<br>";

//Subtract of two number//
    $Sub=$num1-$num2;
    echo "Subtract of two number: ",$Sub;
    echo"<br>";
    echo"<br>";

//Multiply of two number//
    $Mul=$num1*$num2;
    echo"Multiply of two number: ",$Mul;
    echo"<br>";
    echo"<br>";

//Quotient of two number//
    $Div=$num1/$num2;
    echo"Quotient of two number: ",$Div;
    echo"<br>";
    echo"<br>";

//Remainder of two number//
    $Remainder=$num1%$num2;
    echo"Remainder of two number: ",$Remainder;
    echo"<br>";
    echo"<br>";
    echo"<br>";


//Identify the biggest number//
    if($num1 > $num2 && $num1 > $num3){
            echo "The Largest Number is: $num1";
        }
    elseif($num2 > $num1 && $num2 > $num3){
        echo "The Largest Number is: $num2";
    }
    else{
        echo "The Largest Number is: $num3";
    }
    echo"<br>";
    echo"<br>"; 


//Identify the lower number//
    if($num1 < $num2 && $num1 < $num3){
            echo "The Lower Number is: $num1";
        }
    elseif($num2 < $num1 && $num2 < $num3){
        echo "The Lower Number is: $num2";
    }
    else{
        echo "The Lower Number is: $num3";
    }
    echo"<br>";
    echo"<br>";
    echo"<br>";


//Count the letters of a string//
    echo var_dump($name);

?>