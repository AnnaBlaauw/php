<?php

   function myFunction($a) {
    echo " gemiddelde leeftijd van " . implode(' ', array_keys ($a)) . " is = " . array_sum($a)/count($a) . "<br>";

   }

    $age = array("rik" => 30, "sven"=> 12, "anna" => 32, "zakariya" => 30, "zahra" => 2);
    $age2 = array("rik" => 300, "sven"=> 12, "anna" => 32000, "zakariya" => 30, "zahra" => 2);
    
   myFunction($age);

   myFunction($age2);


    
?> 
