<?php
    /* TODO : 연도가 400으로 나누어지면 윤년이다.
              연도가 4로 나누어지고 100으로 나누어지지 않으면 윤년이다.
    */
    $year = 1800;

    print "${year}년은 ";
    if($year % 400 === 0 || ($year % 4 === 0 && $year % 100 !== 0))
    {
        print "윤년입니다.";
    }
    else
    {
        print "윤년이 아닙니다.";
    }
?>