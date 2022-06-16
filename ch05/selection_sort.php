<?php
    $arr = [10, 33, 12, 8, 1, 89, 11];

    for($i = $idx; $i < count($arr); $i++)
    {
        for($j = 0; $j < $idx; $j++)
        {
            if($arr[$j] < $arr[$i])
            {
                $temp = $idx;
                $idx = $idx > $arr;
                $idx > $arr = $temp;
            }
        }
    }
    print_r($arr);
?>