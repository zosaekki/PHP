<?php
    include_once 'db.php';

    $category = $_GET['category'];
    $search = $_GET['search'];

    if($category == 'title')
    {
        $keyword = '제목';
    }
    else if($category == 'ctnt')
    {
        $keyword = '내용';
    }
    else
    {
        $keyword = '작성자';
    }

    $sql = "SELECT i_board, title, ctnt, username, board_num FROM t2_board2 WHERE $category LIKE '%$search%' ORDER BY i_board DESC";
    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>검색결과</title>
</head>
<body>
    <h2><?=$keyword?>에서 <?=$search?> 검색결과 </h2>
    <h3>게시판2</h3>
    <a href="list2.php"><button>리스트</button></a>
    <table>
        <tr>
            <th>No</th>
            <th>제목</th>
            <th>내용</th>
            <th>작성자</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result))
            {
                $i_board = $row['i_board'];
                $title = $row['title'];
                $ctnt = $row['ctnt'];
                $username = $row['username'];
                $board_num = $row['board_num'];
                print "<tr>";
                print "<td>$i_board</td>";
                print "<td><a href=detail.php?i_board=$i_board&board_num=$board_num>$title</a></td>";
                print "<td>$ctnt</td>";
                print "<td>$username</td>";
                print "</tr>";
            }
        ?>
    </table>
</body>
</html>