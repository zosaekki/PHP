<?php
    $n1 = 9;
    $n2 = 5;

    print_sum($n1, $n2);
    print_minus($n1, $n2);
    print_multi($n1, $n2);
    print_div($n1, $n2);
    print_mod($n1, $n2);

    function print_sum($n1, $n2)
    {
        $result = $n1 + $n2;
        print "$n1 + $n2 = $result <br>";
    }
    print_sum($n1, $n2);

    function print_minus($n1, $n2)
    {
        $result = $n1 - $n2;
        print "$n1 - $n2 = $result <br>";
    }
    print_minus($n1, $n2);

    function print_multi($n1, $n2)
    {
        $result = $n1 * $n2;
        print "$n1 * $n2 = $result <br>";
    }
    print_multi($n1, $n2);

    function print_div($n1, $n2)
    {
        $result = $n1 / $n2;
        print "$n1 / $n2 = $result <br>";
    }
    print_div($n1, $n2);

    function print_mod($n1, $n2)
    {
        $result = $n1 % $n2;
        print "$n1 % $n2 = $result <br>";
    }
    print_mod($n1, $n2);

?>