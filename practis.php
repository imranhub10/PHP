<?php
$a=10;
$b=20;
$c=30;
if ($a > $b)
{
    if($a > $c)
    {
        echo "large: $a";
    }
}
elseif($b > $c)
{
    echo "large: $b";
}else{
    echo"large: $c";
}
   
?>