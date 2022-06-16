<?php
    // 모든 변수는 값 1개밖에 못 가진다.
    // 변수 = 주택, 변수 = 아파트
    // 

    $week = array("일", "월", "화", "수", "목", "금", "토");

    echo $week[0] . "<br>";
    echo $week[3] . "<br>";

    $week[3] = "Wed";
    echo $week[3] . "<br>";

    $week[7] = "응?";
    echo $week[7] . "<br>";     // 배열이 늘어남.

    $week[9] = "ㅁㅁ";
    echo $week[8] . "<br>";
    echo $week[9] . "<br>";
    echo $week[11] . "<br>";
    echo "test <br>";

    $test = array("A", "B");
    echo count($test) . "<br>";

    array_push($test, "C", "D");   // 배열 끝에 값 추가.

    echo "count(\$test) : " .count($test) . "<br>";

    echo "test[2] : " . $test[2] . "<br>";
    echo "test[3] : " . $test[3] . "<br>";

    echo "--------------------<br>";

    $test2 = array(1, 3.44, "안녕"); // 절대 쓰지마라!! type 무조건 맞추기!!
    echo $test2[0] . "<br>";
    echo $test2[1] . "<br>";
    echo $test2[2] . "<br>";
?>