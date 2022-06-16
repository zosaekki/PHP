<?php

    echo " -- 시작 --";
    while(true)
    {
        $r_val = rand(1, 10);
        if($r_val == 10) { break; }
        echo "r_val : $r_val <br>";
    }
    echo " -- 끝 -- <br>";
?>