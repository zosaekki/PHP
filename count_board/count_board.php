<?php
    include_once "db.php";
    // db 커넥션시도하여 connection 객체 얻어오기
    $connection = get_conn();

    // 오늘 날짜 정보를 가져옴
    $YY = date('Y'); // 년
    $MM = date('M'); // 월
    $DD = date('D'); // 일
    $dat = $YY."-".$MM."-".$DD;
    
    // 오늘 날짜 정보를 db에서 조회한다
    $sql = "SELECT * FROM count_db WHERE redate = ";
    // 쿼리 전송
    $result = mysqli_query($connection, $sql);
    // 결과 집합을 받아 온다
    $list = mysqli_num_rows($result);

    if(!$list) { // 방문자가 없어서 date 정보가 없을 경우
        $count = 0;
    }
    else { // 방문자가 있어서 date 정보가 존재할 경우
        $row = mysqli_fetch_assoc($result);
        $count = $row['count']; // 현재 날짜의 count 값을 가져온다
    }

    if($count == 0) {
        $count++;
        // 오늘 날짜로 새로운 count값을 추가한다
        $sql = "INSERT INTO count_db VALUES ($count, '$dat')";
    }
    else {
        $count++;
        // 오늘 날짜의 기존 count 값을 변경시킨다
        $sql = "UPDATE count_db SET count = $count WHERE redate = '$dat'";
    }

    mysqli_query($connection, $sql);
    //Total 조회수
    $totalQuery = "SELECT SUM(count) FROM count_db";
    $totalCount = mysqli_fetch_array(mysqli_query($connection, $totalQuery))[0];
    mysqli_close($connection);



    echo "<br><center><h2> 방문자 수 통계입니다 </h2><hr>";
    echo "[ Today: <font color = red>";
    echo $count;
    echo "</font> ] <br>";

    echo "[ Total: <font color = blue>";
    echo $totalCount;
    echo "</font> ] <br>";