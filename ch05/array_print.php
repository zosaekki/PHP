<?php
    $numbers = array(10, 20, 30, 40, 50);

    print $numbers . "<br>";
    print_r($numbers);
    // print_r : array의 내용 방이름, 값 / () 줘야 함. <br>태그 사용 불가.
    print "<br>";

    array_push($numbers, 60, 100, 200);
    print_r($numbers);
    print "<br>";
?>