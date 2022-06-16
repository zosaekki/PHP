<?php
    $snum = 5;
    $enum = 2;
    print_num_from_to($snum, $enum);

    function print_num_from_to($snum, $enum)
    {
        print "[ ";
        if($snum > $enum)
        {
            for($j=$snum; $j>=$enum; $j--)
            {
                print $j;
                if($j>$enum)
                {
                    print ", ";
                }
            }
        }
        
        for($i=$snum; $i<=$enum; $i++)
        {
            print $i;
            if($i<$enum) { print ", "; }
        }
        print " ]";
    }



    // [4, 5, 6, 7, 8, 9, 10] 출력
    // 만약 enum값이 더 작으면 [ 5, 4, 3, 2, 1 ] 출력

?>