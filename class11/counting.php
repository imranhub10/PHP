<?php 
$Start = 0;
$Limit = 50;
$Step = 1;
$line = 0;

for($Counter = $Start; $Counter <= $Limit; $Counter += $Step)
{
    if($line % 5 == 0)
        echo "<br>";
        $line++;
        echo $Counter." ";
    }
?>