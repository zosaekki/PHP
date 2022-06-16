<?php
    $score = array(1, 2, 3, 4);
    $score2 = $score; /* 같은 배열을 하나 더 만들어 준다.
                         구조는 같은 다른 배열 */

    print_r($score);
    print "<br>";
    print_r($score2);
    print "<br>";

    $score2[0] = 100;

    print_r($score);
    print "<br>";
    print_r($score2);
    print "<br>";
?>