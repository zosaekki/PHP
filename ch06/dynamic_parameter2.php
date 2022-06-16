<?php
    /*
    func_num_agrs() : 인자수 리턴
    func_get_arg() : 인자값 가져올 때 사용
    func_get_agrs() : 인자배열로 받음
    */
    
    function multi()
    {
        print "[1] : " . func_get_args()[1] . "<br>";
    }
    multi(2);
    multi(5, 10);
    print "--------<br>";

    function print_sum()
    {
        print "func_num_args() : " . func_num_args() . "<br>";
        print "func_get_args() : " . func_get_args() . "<br>";
        print "-------<br>";
    }

    print_sum(10);
    print_sum(10, 11, 13);

    function sum()
    {
        print "count : " . count(func_get_args()) . "<br>";
        $sum = 0;
        foreach(func_get_args() as $val)
        {
            $sum += $val;
        }
        return $sum;
    }

    print "sum : " . sum(1, 2) . "<br>";
    print "sum : " . sum(1, 2, 13, 6, 14, 12) . "<br>";
    
    
?>