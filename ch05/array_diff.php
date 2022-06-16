<?php
    // 배열 비교
    // $arr1 기준에서 $arr2가 없는 값 뽑아냄.

    $arr1 = [1, 2, 3, 4, 5];
    $arr2 = [1, 2, 3, 6, 7];

    $arr3 = [1, 2, 3, 4, 5];

    $diff_arr = array_diff($arr1, $arr2);

    print_r($diff_arr);
    print "<br>";

    print ($arr1 === $arr2) . "<br>"; // False
    print ($arr1 === $arr3) . "<br>"; // True
?>