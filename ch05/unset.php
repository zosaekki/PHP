<?php
    if(isset($name))
    {
        print "name is ok!!";
    }


    $name = "HongGilDong";
    if(isset($name))
    {
        print "name is great!!";
    }
    print $name . "<br>";

    unset($name); // 변수해제
    print $name;

    print "The End";
?>