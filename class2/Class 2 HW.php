<?php
//Write a program that can calculate the sum and average of three numbers.//
    $num1=10;
    $num2=20;
    $num3=30;
    $num_of_value=3;
    $Addition=($num1+$num2+$num3);
    echo "Addition is: ",$Addition;
    echo "<br>";
    echo "<br>";

    $average=($Addition / 3);
    echo "Average is: ",$average;
    echo "<br>";
    echo "<br>";



//There is given the radius of a circle. Find the area, circumference of it. (Use π as a....//
    $r = 2.5;
    $a = 3.1416;
    $area = $a * $r * $r;
    $c = 2 * $a * $r;
    echo "Area is: ",$area;
    echo "<br>";
    echo "Circumference is: ",$c;
    echo "<br>";
    echo "<br>";



//There are three values of three lines; Find out the area of it.
    $a = 3;
    $b = 4;
    $c = 5;
    $s = ($a + $b + $c)/2;
    $area = (sqrt($s * ($s-$a) * ($s-$b) * ($s-$c))); 
    echo "There are three values of three lines; the area of it: ",$area;
    echo "<br>";
    echo "<br>";



//Find out the maximum of two numbers using if structure//
    $num1 = 30;
    $num2 = 60;
    if($num1 > $num2){
        echo "The Largest Number is: ",$num1;
    }else{
        echo "The Largest Number is: ",$num2;
    }
    echo "<br>";
    echo "<br>";



//Find out the maximum of three numbers using only if structure//
    $num1 = 10;
    $num2 = 20;
    $num3 = 30;
    if($num1 > $num2 && $num1 > $num3){
        echo "The Largest Number of three number is: ",$num1;
    }elseif($num2 > $num1 && $num2 > $num3){
        echo "The Largest Number of three number is: ",$num2;
    }else{
        echo "The Largest Number of three number is: ",$num3;
    }
    echo "<br>";
    echo "<br>";



//Write a program that convert temperature to from Fahrenheit to Celsius and vice....//
    $celsius = 37;
    $fahrenheit = ($celsius * 9) / 5 + 32;
    echo "Celsius $celsius to Fahrenheit Value: ",$fahrenheit;
    echo "<br>";
    echo "<br>";


//Fahrenheit to Celsius//
    $fahrenheit = 98.6;
    $celsius = ($fahrenheit - 32) * 5 / 9;
    echo "Fahrenheit $fahrenheit to Celsius Value: ",$celsius;
    echo "<br>";
    echo "<br>";
    
    

//Even or Odd Number Check//
    $num = 11;
    if($num % 2==0){
        echo "Even";
    }else{
        echo "Odd";
    }
    echo "<br>";
    echo "<br>";



//Writ a program that can test whether it is divisible by 5 or not//
    $num = 10;
    if($num % 5 == 0){
        echo "Divisible";
    }else{
        echo "Not Divisible";
    }
    echo "<br>";
    echo "<br>";



//Write a program that can test a year whether it is leaper or not//
    $year = 2020;
    if($year%100==0 and $year%400){
        echo "$year is leaper.";
    }elseif($year%100!==0 and $year%4==0){
        echo "$year is leaper.";
    }else{
        echo "$year is not leaper.";
    }
    echo "<br>";
    echo "<br>";



//Write a program that can test a number whether it is negative or positive.//
    $num = 6;
    if($num<0){
    echo "$num Number is negative";
    }else{
    echo "$num Number is positive";
    }
    echo "<br>";
    echo "<br>";



//Write a program that can say the name of weekdays by receiving 1 to 7. Using (i) if_then//
    $day_num = 7;
    if($day_num==1){
        echo "Sunday";
    }elseif($day_num==2){
        echo "Monday";
    }elseif($day_num==3){
        echo "Tuesday";
    }elseif($day_num==4){
        echo "Wednesday";
    }elseif($day_num==5){
        echo "Thursday";
    }elseif($day_num==6){
        echo "Friday";
    }elseif($day_num==7){
        echo "Saturday";
    }
    echo "<br>";
    echo "<br>";



//Write a program that can say the name of Month by receiving 1 to 12. Using (i) If_then..//
    $day_num = 3;
    switch($day_num){
        case ($day_num==1):
            echo "Sunday";
            break;
        case ($day_num==2):
            echo "Monday";
            break;
        case ($day_num==3):
            echo "Tuesday";
            break;
        case ($day_num==4):
            echo "Wednesday";
            break;
        case ($day_num==5):
            echo "Thursday";
            break;
        case ($day_num==6):
            echo "Friday";
            break;
        case ($day_num==7):
            echo "Saturday";
            break;                
    }
    echo "<br>";
    echo "<br>";



//Write a program that can say the name of Month by receiving 1 to 12. Using//
    $month_num = 11;
    switch($month_num){
        case ($month_num==1):
            echo "January";
            break;
        case ($month_num==2):
            echo "February";
            break;
        case ($month_num==3):
            echo "March";
            break;
        case ($month_num==4):
            echo "April";
            break;
        case ($month_num==5):
            echo "May";
            break;
        case ($month_num==6):
            echo "June";
            break;
        case ($month_num==7):
            echo "July";
            break;
        case ($month_num==8):
            echo "August";
            break;    
        case ($month_num==9):
            echo "September";
            break;
        case ($month_num==10):
            echo "October";
            break;
        case ($month_num==11):
            echo "November";
            break;
        case ($month_num==12):
            echo "December";
            break;
    }    
    echo "<br>";
    echo "<br>";



//Write a program that can convert an upper case letter to lower case letter and vice//
    $string = "I love code";
    for($i=0;$i<strlen($string);$i++){
        if($string[$i]>='a' && $string[$i]<='z'){
            $string[$i]=strtoupper($string[$i]);
        }elseif($string[$i]>='A'&& $string[$i]<='Z'){
            $string[$i]=strtolower($string[$i]);
        }
    }
    echo "String after case conversion: $string";
    echo "<br>";
    echo "<br>";



//Write a program that will obtain the length and width of a rectangle from the user//
    $d = 5;
    $p = 3;
    $area = $d * $p;
    $circumference = 2*($d+$p);
    echo "Area is: ",$area;
    echo "<br>";
    echo "Circumference is: ",$circumference;

?>
