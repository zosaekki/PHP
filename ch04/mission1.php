<?php
    /*
        90점 이상 A (3점 이하, '-', 7점 이상 or 100점'+')
        => 93점 : A-, 95점 : A, 98점 : A+
        80점 이상 B (3점 이하, '-', 7점 이상 '+')
        70점 이상 C (3점 이하, '-', 7점 이상 '+')
        60점 이상 D (3점 이하, '-', 7점 이상 '+')
        60점 미만 F
        0~100 점수가 아니면 "잘못된 값" 출력
    */
    $score = rand(0, 120);
    echo "점수 : $score <br>";
    

    if($score > 100 || $score < 0)
    {
        echo "잘못된 값";
    }
    else
    {
        $sign = "F";
        $symbol = "";
        $val_1 = intval($score / 10);
        switch($val_1)
        {
            case 10: case 9:
                $sign = "A";
                break;
            case 8:
                $sign = "B";
                break;
            case 7:
                $sign = "C";
                break;
            case 6:
                $sign = "D";
                break;
        }
        $val_2 = $score % 10;
        if($score >= 60)
        {
            if($score === 100 || $val_2 >= 7)
            {
                $symbol = "+";
            }
            else if($val_2 <= 3)
            {
                $symbol = "-";
            }
        }
        echo $sign . $symbol;
    }
?>