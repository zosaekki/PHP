<?php

    echo "--------------- break --------------- <br>";
    for($i = 0; $i < 20; $i++)
    {
        if($i == 12) { break; }
        echo $i . "<br>";
    }

    echo "--------------- continue --------------- <br>";
    for($i = 0; $i < 20; $i++)
    {
        if($i == 12) { continue; }
        echo $i . "<br>";
    }
?>