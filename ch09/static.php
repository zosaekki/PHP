<?php
    class Calc {
        function sum($n1, $n2) {
            return $n1 + $n2;
        }
    }

    // Calc를 객체화 하시고 변수명은 c
    // sum 메소드를 호출 5, 10을 더한 값을 리턴받고 화면에 출력

    $c = new Calc;
    $result = $c->sum(5, 10);
    print "Calc : $result <br>";

    class StaticCalc {
        static function sum($n1, $n2) {
            return $n1 + $n2;
        }
    }

    $result = StaticCalc::sum(10, 10);
    print "StaticCalc : $result <br>";