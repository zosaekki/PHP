<?php
    /*
    star 값이 3이면
    *
    **
    ***

    6이면
    *
    **
    ***
    ****
    *****
    ******
    */

    $star = rand(3, 10);
    echo $star . "<br>";

    for($i = 0; $i < $star; $i++)
    {
        for($j = 0; $j <= $i; $j++)
        {
            echo "*";
        }
    echo "<br>";
    }
?>