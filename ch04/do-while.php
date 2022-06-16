<?php
    /*
        rand 실행을 시킬건데 10이 나올 때까지 반복한다.
        10이 아니면 숫자를 찍는다.
        10이 나오면 반복을 멈추고 " 끝 " 출력!
    */

    echo " --시작 -- <br>";
    do {
        $r_val = rand(1, 10);
        echo "r_val : $r_val <br>";
    }while ($r_val != 10);
    echo " --끝 -- <br>";
?>