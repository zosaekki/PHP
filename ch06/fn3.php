<?php
    $start_num = 1;
    $end_num = 100;

    $result = sum_from_to($start_num, $end_num); // " = " 있으면 return 값 필수!!!

    function sum_from_to($n1, $n2)
    {
        for($i=0; $i<101; $i++)
        {
            $result += $i;
        }
        print "$n1 ~ $n2 을(를) 모두 더한 값은 $result <br>"; 
    }

    // print "$start_num ~ $end_num 을(를) 모두 더한 값은 $result <br>"; 

    // function sum_from_to($snum, $enum)
    // {
    //     $result = 0;
    //     for($i=$snum; $i<=$enum; $i++)
    //     {
    //         $result += $i;
    //     }
    //     return $result;
    // }
?>