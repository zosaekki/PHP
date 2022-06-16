<?php
    //$dan = rand(2, 9);

    // print_gugudan($dan);
    print_gugudan_from_to(2, 6);

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


    function print_gugudan_from_to($sdan, $eden)
    {
        for($dan=$sdan; $dan<=$edan; $dan++)
        {
            print_gugudan($dan);
            print "<br>";
        }
    }

    // function print_gugudan_from_to($dan)
    // {
    //     for($i=2; $i<7; $i++)
    //     {
    //         if($i > 2)
    //         { print "------------------<br>"; }

    //         for($j=1; $j<10; $j++)
    //         {
    //             $result = $i * $j;
    //             print "$i x $j = $result <br>";
    //         }
    //     }
    // }


    function print_gugudan($dan)
    {
        for($i=1; $i<10; $i++)
        {
            print "$dan x $i = " . ($dan * $i) . "<br>";
        }
    }
?>