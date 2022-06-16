<?php
    // 객체 안에 함수가 있으면 method

    // 객체 안이 아니라면 function
    // 함수 function

    $result = sum(10, 20); // 호출 (함수명 적어야함)

    print "sum : $result <br>";
    print "sum : " . sum(30, 40) . "<br>";

    minus(35, 12);
    minus(10, 2);

    function sum($n1, $n2) // function 함수명(파라미터 - 외부에서 들어오는 값, 매개변수, 선언부)
    {
        return $n1 + $n2; // return : 옵션 , (구현부)
    }

    function minus($n1, $n2)
    {
        print "minus : " . ($n1 - $n2) . "<br>";
    }
?>