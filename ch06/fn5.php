<?php
    $snum = 2;
    $enum = 8;
    print_num_from_to($snum, $enum);

    // [4, 5, 6, 7, 8, 9, 10] 출력
    // 만약 enum값이 더 작으면 "종료값이 더 작을 수 없습니다. 출력

    /*
    function print_num_from_to($snum, $enum)
    {
        print "[";
        for($i=$snum; $i<=$enum; $i++)
        {
            print " $i ";

            if($i<$enum)
            {
                print ",";
            }
        }
        if($snum>$enum)
            {
                print " 종료값이 더 작을 수 없습니다. ";
            }
        print "]";
    }
    */


    function print_num_from_to($snum, $enum)
    {
        if($enum < $snum)
        {
            print "<div>종료값이 더 작을 수 없습니다.</div>";
            return;
        }
        
        print "[";
        for($i=$snum; $i<=$enum; $i++)
        {
            if($i > $snum)
            {
                print", ";
            }
            print $i;
        }
        print "]";
    }
?>