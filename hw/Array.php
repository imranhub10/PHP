<?php
//Index Array//
    $city = array("Satkhira", "Tangail", "Dhaka");
    print_r($city);
    echo "<br>";
    echo $city[2];

//Associative Array//
    $run = array("Tamim"=>55, "Asif"=>22, "Rakib"=>58);
    echo "<br>";
    echo $run["Rakib"];

//Multidimensional Array//
    $student = array(
        array("Ashif", 22),
        array("Imran", 24),
        array("Ridoy", 16)
    )
?>