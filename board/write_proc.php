<?php
    include_once "db.php"; // 한번만 들고옴 once. Query문 사용하기 위해서 가져옴

    $title = $_POST["title"];
    $ctnt = $_POST["ctnt"];

    print "title : $title <br>"; // print 의미 없다. test용으로 print 찍어봄
    print "ctnt : $ctnt <br>";

    $conn = get_conn(); // database connection , include_once해서 사용가능한거
    $sql = 
    "
        INSERT INTO t_board
        (title, ctnt)
        VALUES
        ('${title}', '${ctnt}')
    ";
    $result = mysqli_query($conn, $sql); // 쿼리문 실행 (커넥션 정보, 실행시킬 쿼리문)
    mysqli_close($conn); // 연결 끊기!!!
    print "result : $result <br>";

    header("Location: list.php"); // "/" 없으면 끝에 주소값만 바뀜, / 있으면 도메인빼고 다 바뀜(ex. 폴더이동) 주소값 다 적어줘야 함
    die(); // 리소스 해제하는 것? 로그 남길 때 쓰는 것? 마지막에 있으면 별 의미 없다? 함수의 return 같은
?>