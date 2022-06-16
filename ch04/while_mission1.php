<?php
    /*
        1부터 val 변수에 있는 수자를 모두 더해주세요.
        그리고 결과값을 출력해주세요.
        while문으로 해결.
    */

    $val = rand(50, 100);
    echo "val : $val <br>";

    $sum = 0;
    $i = 1;
    while($i <= $val)
    {
        $sum += $i;
        $i++;
    }
    echo " 합계 : $sum";
?>