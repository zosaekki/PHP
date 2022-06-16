<?php
    function make_ten()
    {
        global $i; // 전역변수로 만들어줌
        $i = $i + 10; // 지역변수, 호출 -> 만들어지고 -> 끝나면 소멸
    }

    $i = 5; // 전역변수
    make_ten();
    print "i : $i <br>";
?>