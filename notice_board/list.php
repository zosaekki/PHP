<?php
    include_once 'db_info.php';
    
    $sql = "SELECT id, title, username, wdate, mod_at FROM board ORDER BY id DESC";

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
    <title>list</title>
    <style>
        table { border: 1px solid #000; width: 800px; }
        th { border: 1px solid #000; width: 500px; }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>No</th>
            <th>제목</th>
            <th>작성자</th>
            <th>작성시간</th>
            <th>수정시간</th>
        </tr>
        <?php
            while($row = mysqli_fetch_assoc($result))
            {
                $id = $row['id'];
                $title = $row['title'];
                $username = $row['username'];
                $wdate = $row['wdate'];
                $mod_at = $row['mod_at'];
                print "<tr>";
                print "<td>$id</td>";
                print "<td><a href=detail.php?id=$id>$title</a></td>";
                print "<td>$username</td>";
                print "<td>$wdate</td>";
                print "<td>$mod_at</td>";
                print "</tr>";
            }
        ?>
        <tr>
            <th colspan="5"><a href="write.php"><button>글 쓰기</button></a></th>
        </tr>
    </table>
</body>
</html>