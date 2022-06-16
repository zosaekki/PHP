<?php
    $array = array(100, 200, 300, 400, 500);

    foreach($array as $val)
    {
        print $val . "<br>";
    }
    print "-------------------- <br>";

    foreach($array as $key => $val) // 키 값(key value)도 넣을 수 있다.
    {
        print $key . " : " . $val . "<br>";
    }
    print "-------------------- <br>";
?>