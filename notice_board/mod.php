<?php
    include_once 'db_info.php';

    $id = $_GET['id'];

    $sql = "SELECT id, username, title, content FROM board WHERE id = $id";

    $conn = get_conn();
    $result = mysqli_query($conn, $sql);
    mysqli_close($conn);

    if($row = mysqli_fetch_assoc($result))
    {
        $id = $row['id'];
        $username = $row['username'];
        $title = $row['title'];
        $content = $row['content'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table { border: 1px solid #000; width: 600px; padding: 3px; }
        th{ border: 1px solid #000; width: 150px; padding: 3px; }
    </style>
</head>
<body>
    <form action="mod_proc.php" method="post">
        <table>
            <tr>
                <th>No</th>
                <td><input type="text" name="id" value="<?=$id?>" readonly></td>
            </tr>
            <tr>
                <th>작성자</th>
                <td><input type="text" name="username" value="<?=$username?>" readonly></td>
            </tr>
            <tr>
                <th>제목</th>
                <td><input type="text" name="title" value="<?=$title?>"></td>
            </tr>
            <tr>
                <th>내용</th>
                <td><textarea name="content"><?=$content?></textarea></td>
            </tr>
            <tr>
                <th colspan="2">
                    <input type="submit" value="저장">
                    <input type="reset" value="초기화">
                    <a href="list.php"><button>취소</button></a>
                </th>
            </tr>
        </table>
    </form>
</body>
</html>