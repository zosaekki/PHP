<?php
    include_once 'db.php';

    $sql = "SELECT i_board, title, username, created_at, board_num FROM t2_board2 ORDER BY i_board DESC";

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
    <title>글 목 록</title>
</head>
<body>
    <h1>글 목 록</h1>
    <h2>게시판2</h2>
    <a href="write.php"><button>글 쓰 기</button></a>
    <a href="list.php"><button>게시판1</button></a>
    <a href="list2.php"><button>게시판2</button></a>
    <form action="search_result2.php">
        <select name="category">
            <option value="title">제목</option>
            <option value="ctnt">내용</option>
            <option value="username">작성자</option>
        </select>
        <input type="text" name="search" placeholder="검색" required><button>검색</button>
    </form>
    <table>
        <tr>
            <th>No</th>
            <th>제목</th>
            <th>작성자</th>
            <th>작성일시</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result))
            {
                $i_board = $row['i_board'];
                $title = $row['title'];
                $username = $row['username'];
                $created_at = $row['created_at'];
                $board_num = $row['board_num'];
                print "<tr>";
                print "<td>$i_board</td>";
                print "<td><a href=detail.php?i_board=$i_board&board_num=$board_num>$title</a></td>";
                print "<td>$username</td>";
                print "<td>$created_at</td>";
                print "</tr>";
            };
        ?>
    </table>
</body>
</html>