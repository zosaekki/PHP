<?php
    // TODO : 범위 지정이 안된다는 가정하에 switch 미션
    // switch 문으로 해결
    // #mon 값이 3~5 사이면 "봄" 출력
    // #mon 값이 6~8 사이면 "여름" 출력
    // #mon 값이 9~11 사이면 "가을" 출력
    // #mon 값이 "12, 1, 2면 "겨울" 출력
    // #mon 다른 값이면 "계절 없음"" 출력

    $mon = rand(1, 12);

    switch ($mon)
    {
        case 3: case 4: case 5:
            print "${mon}월은 봄";
            break;
        
        case 6: case 7: case 8:
            print "${mon}월은 여름";
            break;

        case 9: case 10: case 11:
            print "${mon}월은 가을";
            break;

        case 12: case 1: case 2:
            print "${mon}월은 겨울";
            break;

        default:
            print "계절없음";
            break;
        
    }
?>