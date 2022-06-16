<?php
    include_once 'db_info.php';

    $id = $_GET['id'];

    $sql = "SELECT username, title, content FROM board WHERE id = $id";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if($row = mysqli_fetch_assoc($result))
    {
        $username = $row['username'];
        $title = $row['title'];
        $content = $row['content'];
    };
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table { border: 1px solid #000; width: 600px;}
        th { border: 1px solid #000; }
    </style>
</head>
<body>
    <table>
        <tr>
            <th>작성자</th>
            <td><input type="text" value="<?=$username?>" readonly></td>
        </tr>
        <tr>
            <th>제목</th>
            <td><input type="text" name="title" value="<?=$title?>" readonly></td>
        </tr>
        <tr>
            <th>내용</th>
            <td><textarea name="content" readonly style="width: 400px; height: 400px;"><?=$content?></textarea></td>
        </tr>
        <tr>
            <th colspan="2">
                <a href="list.php"><button>list</button></a>
                <a href="mod.php?id=<?=$id?>"><button>수정하기</button></a>
                <a href="del_proc.php?id=<?=$id?>"><button>삭제하기</button></a>
            </th>
        </tr>
    </table>
</body>
</html>