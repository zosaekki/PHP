<?php
    $dan = rand(2, 9);
    
    for($i = 1; $i <= 9; $i++)
    {    
         $result = $dan * $i;
         echo "$dan X $i = $result <br>";
        // echo "$dan X $i = " . ($dan * $i) . "<br>";
    }
?>