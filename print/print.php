<?php
    $name = "홍길동";
    $age = 22;
    $height = 177.32;
    $blood_type = 'O';

    printf("제 이름은 %s입니다. 나이는 %d세이고, 키는 %.1fcm입니다. 혈액형은 %s입니다.", $name, $age, $height, $blood_type);

    $str = sprintf("제 이름은 %s입니다. 나이는 %d세이고, 키는 %.1fcm입니다. 혈액형은 %s입니다.", $name, $age, $height, $blood_type);

    print $str;

    // %s = 문자열
    // %d = 정수값
    // %f = 실수값