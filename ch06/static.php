<?php
    function inc() // 쉽게 접근 불가
    {
        static $i = 1; // static이 붙으면 최초 1번만 실행, 소멸 X, 계속 살아있음.
        print $i++ . "<br>";
    }

    $z = 1; 
    function inc2() // 쉽게 접근 가능
    {
        global $z;
        print $z . "<br>";
        $z += 1;
    }

    for($i=0; $i<10; $i++)
    {
        inc();
    }
?>