<?php
    include_once "db.php"; // 한번만 얻어옴, Query문 사용하기 위해서 가져옴

    $conn =  get_conn(); // 커넥션 얻어옴
    $sql = "SELECT i_board, title, create_at FROM t_board ORDER BY i_board DESC";
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>리스트</title>
</head>
<body>
    <h1>리스트</h1>
    <a href="write.php"><button>글쓰기</button></a>
    <table>
        <tr>
            <th>번호</th>
            <th>제목</th>
            <th>작성일시</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result)) // 여러줄이라서 while쓰고 끝나면 whlie문 종료, 한줄씩 배열형태로 가져와서 사용
            {
                $i_board = $row['i_board'];
                $title = $row['title'];
                $create_at = $row['create_at'];
                print "<tr>";
                print "<td>${i_board}</td>";
                print "<td><a href='detail.php?i_board=${i_board}'>${title}</a></td>";
                print "<td>${create_at}</td>";
                print "</tr>";
            }

            /*
            mysqli_connect(주소,아이디, 비번, DB_NAME);
            서로 연결시켜줌
            PHP -----> MySQL

            mysqli_query(       , 문자열);
            쿼리문 실행

            mysqli_fetch_assoc
            값 가져온다
            */
        ?>
    </table>
</body>
</html>