<?php
    $dan = rand(2, 9);

    print_gugudan($dan);

    /*
    print_gugudan_from_to(2, 6);

    function print_gugudan_from_to($sdan, $edan)
    {
        for($dan=$sdan; $dan<=$edan; $dan++)
        {
            print_gugudan($dan);
            print "<br>";
        }
    }
    */

    function print_gugudan($dan) 
    {
        for($i=1; $i<10; $i++)
        {
            print "$dan x $i = " . ($dan * $i) . "<br>";
        }
    }
    /*
    dan = 2
    2 x 1 = 2
    2 x 2 = 4
    ... 
    2 x 9 = 18
    dan = 9
    9 x 1 = 9
    ... 
    9 x 9 = 81
    */
?>