<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <style>
        table { border: 1px solid #000; width: 600px; padding: 3px; }
        th { border: 1px solid #000; width: 150px; padding: 3px; }
    </style>
</head>
<body>
    <form action="write_proc.php" method="post">
        <table>
            <tr>
                <th>작성자</th>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <th>제목</th>
                <td><input type="text" name="title"></td>
            </tr>
            <tr>
                <th>내용</th>
                <td><textarea name="content"></textarea></td>
            </tr>
            <tr>
                <th colspan="2">
                    <input type="submit" value="저장">
                    <input type="reset" value="초기화">
                </th>
            </tr>
        </table>
    </form>
    <a href="list.php"><button>취소</button></a>
</body>
</html>