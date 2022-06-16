<?php

    $star = rand(3, 10);
    echo " star : $star <br>";
    
    $sum = "";
    for($j = 1; $j <= $star; $j++)
    {
        $sum = $sum . "*";
        echo "{$sum} <br>";
    }

?>