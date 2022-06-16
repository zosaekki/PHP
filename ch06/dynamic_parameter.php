<?php

    function print_sum(...$vals) // 인자를 배열로
    {
        print "print_sum : " . array_sum($vals) . "<br>";
    }
        
        // function print_sum(...$vals)
        // {
        //     $sum = 0;
        //     foreach($vals as $val)
        //     {
        //         $sum += $val;
        //     }
        //     print "print_sum : " . $sum . "<br>";
        // }
        

        // function print_sum(...$vals)
        // {
        //     for($i=0; $i<count($vals); $i++)
        //     {
        //         $val = $vals[$i];
        //         $sum += $val;
        //     }
        //     print "print_sum : " . $sum . "<br>";
        // }

    print_sum(1, 2); // sum: 3
    print_sum(1, 2, 3); // sum: 6
    print_sum(1, 2, 3, 4); // sum: 10
    
?>